<!DOCTYPE html>

<head>
  <title>Look Up | Products</title>
  <?php include('shared/head-links.php') ?>
  <script src="../../public/js/search.js" type="text/javascript" defer></script>
  <script src="../../public/js/statistics.js" type="text/javascript" defer></script>
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

        <a class="function-button" href="/addProduct">
          Add new product
        </a>

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
              <div class="favourites">
                <h6>
                  <?= $product->getFavourites(); ?>
                </h6>
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </section>
    </main>

    <?php include('shared/footer.php') ?>
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