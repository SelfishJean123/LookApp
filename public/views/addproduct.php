<!DOCTYPE html>

<head>
  <title>Look Up | Products</title>
  <?php include('shared/head-links.php') ?>
</head>

<body>
  <div class="wrapper">
    <?php include('shared/header.php') ?>

    <main>
      <section class="view-description">
        <h2>Products</h2>
        <p>
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique
          sunt in
          culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est
          et expedita distinctio.
        </p>
      </section>

      <section class="add-product-section">
        <a href="/products" class="close-button">
          <span class="cross-icon"></span>
        </a>
        <h4>Add New Product</h4>
        <div class="add-product-form">
          <form action="addProduct" method="POST" enctype="multipart/form-data">
            <input name="name" type="text" placeholder="Product's name" />
            <textarea name="ingredients" cols="30" rows="5" placeholder="Product's ingredients"></textarea>
            <input name="file" type="file" placeholder="Product's image" class="upload-file-input" />
            <p class="form-messages">
              <?php
              if (isset($messages)) {
                foreach ($messages as $message) {
                  echo $message;
                }
              }
              ?>
            </p>
            <button type="submit" class="function-button">ADD</button>
          </form>
        </div>
      </section>
    </main>

    <?php include('shared/footer.php') ?>

    <div class="overlay"></div>
  </div>
</body>