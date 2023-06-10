<?php session_start(); ?>
<?php if ($_SESSION['ROLE'] == 'viewer' || $_SESSION['ROLE'] == 'editor') { ?>

<!DOCTYPE html>

<head>
  <title>Look Up | Product details</title>
  <?php include('shared/head-links.php') ?>
  <script src="../../public/js/statistics.js" type="text/javascript" defer></script>
  <script src="../../public/js/modals-edit.js" type="text/javascript" defer></script>
</head>

<body>
  <div class="wrapper">
    <?php include('shared/header.php') ?>

    <main>
      <section class="product-details">
        <div class="product-image">
          <img src="public/uploads/<?= $product->getFile(); ?>" alt="" />
        </div>

        <div class="product-description" id="<?= $product->getId(); ?>">
          <div class="product-header">
            <div class="product-name">
              <h4>
                <?= $product->getBrand(); ?>
              </h4>
              <h3>
                <?= $product->getName(); ?>
              </h3>
            </div>

            <?php if ($_SESSION['ROLE'] == 'editor') { ?>
              <div class="product-editor-section">
                <button title="Edit product" id="edit-product-button" class="function-button">
                  <i class="fa-solid fa-pen-to-square"></i>
                </button>
                <button title="Delete product" id="remove-product-button" class="function-button">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </div>
            <?php } ?>
          </div>

          <div id="product-favourites">
            <i class="fa-regular fa-heart"></i>

            <h6>
              <?= $product->getFavourites(); ?>
            </h6>
          </div>

          <div class="product-ingredients">
            <p>
              <span>INCI:</span>
              <?= $product->getIngredients(); ?>
            </p>
          </div>
        </div>

        <?php if ($_SESSION['ROLE'] == 'editor') { ?>
          <div id="edit-product-modal" class="modal">
            <button type="button" class="close-button close-edit-modal-button">
              <span class="cross-icon"></span>
            </button>

            <h4>Edit Product</h4>

            <div class="form-wrapper">
              <form action="editProduct" method="POST" enctype="multipart/form-data">
                <input name="id" type="text" value="<?= $product->getId(); ?>" />
                <input name="name" type="text" value="<?= $product->getName(); ?>" placeholder="Product's name" />
                <input name="brand" type="text" value="<?= $product->getBrand(); ?>" placeholder="Product's brand" />
                <textarea name="ingredients" cols="30" rows="5"
                  placeholder="Product's ingredients"><?= $product->getIngredients(); ?></textarea>
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

                <button type="submit" class="function-button">SAVE CHANGES</button>
                <button type="button" class="function-button close-edit-modal-button">CLOSE</button>
              </form>
            </div>
          </div>

          <div id="remove-product-modal" class="modal">
            <button type="button" class="close-button close-remove-modal-button">
              <span class="cross-icon"></span>
            </button>
            <h4>
              Do you really want
              <br>
              to remove this product?
            </h4>
            <p>This operation is irreversible.</p>

            <div class="form-wrapper">
              <form action="removeProduct" method="POST">
                <input name="id" type="text" id="<?= $product->getId(); ?>" />
                <button type="submit" class="function-button">YES, REMOVE</button>
                <button type="button" class="function-button close-remove-modal-button">NO, CLOSE</button>
              </form>
            </div>
          </div>
        <?php } ?>
      </section>
    </main>

    <?php include('shared/footer.php') ?>
    <div id="productdetails-overlay" class="overlay"></div>
  </div>
</body>

<?php } ?>