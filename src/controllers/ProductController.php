<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../repository/ProductRepository.php';

class ProductController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $productRepository;

    public function __construct()
    {
        parent::__construct();
        $this->productRepository = new ProductRepository();
    }

    public function products()
    {
        $products = $this->productRepository->getProducts();
        $this->render('products', ['products' => $products]);
    }

    public function productdetails()
    {
        return $this->render('productdetails', [
            'product' => $this->productRepository->getProduct($_POST['id']),
            'messages' => $this->message
        ]);
    }

    public function addProduct()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name']
            );

            // TODO create new project object and save it in database
            $product = new Product($_POST['name'], $_POST['ingredients'], $_POST['brand'], $_FILES['file']['name'], $_POST['favourites']);
            $this->productRepository->addProduct($product);

            return $this->render('products', [
                'products' => $this->productRepository->getProducts(),
                'messages' => $this->message
            ]);
        }

        return $this->render('addProduct', ['messages' => $this->message]);
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->productRepository->getProductsByNameOrIngredient($decoded['search']));
        }
    }

    public function favourites(int $id)
    {
        $this->productRepository->favourites($id);
        http_response_code(200);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }
}