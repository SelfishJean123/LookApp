<!DOCTYPE html>

<head>
  <title>Look Up | Products</title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <script src="../../public/js/search.js" type="text/javascript" defer></script>
  <script src="../../public/js/statistics.js" type="text/javascript" defer></script>
  <script src="https://kit.fontawesome.com/dcece42733.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
    <header>
      <a href="/" class="mini-logo">
        <img src="public/img/logo-black-mini.svg" alt="mini logo" />
      </a>
      <label>
        <input type="checkbox" />

        <span class="menu">
          <span class="hamburger"></span>
        </span>

        <ul>
          <li><a href="signin">Sign In</a></li>
          <li><a href="signup">Sign Up</a></li>
          <li><a href="about">About Look Up</a></li>
          <li><a href="products">Products</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
      </label>
    </header>

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

    <footer class="footer-bg">
      <a href="/" class="logo">
        <img src="public/img/logo-white.svg" alt="Look Up logo" />
      </a>
      <div class="copyrights">
        <p>© 2023 Look Up. All rights reserved</p>
      </div>
    </footer>
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