<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Product.php';

class ProductRepository extends Repository
{
    public function getProduct(int $id)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.products WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$product) {
            return null;
        }

        return new Product(
            $product['brand'],
            $product['name'],
            $product['ingredients'],
            $product['image']
        );
    }

    public function addproduct(Product $product)
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO products (brand, name, ingredients, image, created_at, id_assigned_by)
            VALUES (?, ?, ?, ?, ?, ?)
        ');

        //TODO you should get this value from logged user session
        $assignedById = 1;

        $stmt->execute([
            $product->getBrand(),
            $product->getName(),
            $product->getIngredients(),
            $product->getFile(),
            $date->format('Y-m-d'),
            $assignedById
        ]);
    }

//    public function getProducts(): array
//    {
//        $result = [];
//
//        $stmt = $this->database->connect()->prepare('
//            SELECT * FROM products;
//        ');
//        $stmt->execute();
//        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//        foreach ($products as $product) {
//            $result[] = new Product(
//                $product['brand'],
//                $product['name'],
//                $product['ingredients'],
//                $product['image'],
//                $product['rating'],
//                $product['id']
//            );
//        }
//
//        return $result;
//    }
//
//    public function getProductByName(string $searchString)
//    {
//        $searchString = '%' . strtolower($searchString) . '%';
//
//        $stmt = $this->database->connect()->prepare('
//            SELECT * FROM products WHERE LOWER(name) LIKE :search OR LOWER(description) LIKE :search
//        ');
//        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
//        $stmt->execute();
//
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }

//    public function rating(int $id) {
//        $stmt = $this->database->connect()->prepare('
//            UPDATE products SET "like" = "like" + 1 WHERE id = :id
//         ');
//
//        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
//        $stmt->execute();
//    }
}