<?php session_start(); ?>

<!DOCTYPE html>

<head>
  <title>Look Up | Products</title>
  <?php include('shared/head-links.php') ?>
  <script src="../../public/js/search.js" type="text/javascript" defer></script>
  <script src="../../public/js/modal-add.js" type="text/javascript" defer></script>
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

        <?php if ($_SESSION['ROLE'] == 'editor') { ?>
          <button id="add-product-button" class="function-button">Add new product</button>
        <?php } ?>

        <input name="search-for-product" type="text" placeholder="Search for product..." />
      </section>

      <section class="products">
        <?php foreach ($products as $product): ?>
          <div class="product-tile" id="<?= $product->getId(); ?>">
            <div class="image">
              <img src="public/uploads/<?= $product->getFile(); ?>" alt="" />
            </div>

            <div class="name">
              <h5>
                <?= $product->getName(); ?>
              </h5>

              <form action="productdetails" method="POST" enctype="multipart/form-data">
                <input name="id" type="text" value="<?= $product->getId(); ?>" />
                <button type="submit" class="function-button">Details</button>
              </form>
            </div>
          </div>
        <?php endforeach; ?>

        <?php if ($_SESSION['ROLE'] == 'editor') { ?>
          <div id="add-product-modal" class="modal">
            <button type="button" id="close-add-modal-button" class="close-button">
              <span class="cross-icon"></span>
            </button>
            <h4>Add New Product</h4>
            <div class="form-wrapper">
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
          </div>
        <?php } ?>
      </section>
    </main>

    <?php include('shared/footer.php') ?>
    <div id="products-overlay" class="overlay"></div>
  </div>
</body>

<template id="product-template">
  <div class='product-tile'>
    <div class='image'>
      <img src='' alt='' />
    </div>
    <div class='name'>
      <h5></h5>
      <div class="favourites">
        <h6>
        </h6>
        <i class="fa-regular fa-heart"></i>
      </div>
    </div>
  </div>
</template>