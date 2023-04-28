<!DOCTYPE html>

<head>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
  <title>Look Up</title>
  <script src="https://kit.fontawesome.com/dcece42733.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="back-button">
        <img src="public/img/chevron-back.png" alt="back button" />
      </div>
      <div class="mini-logo">
        <img src="public/img/logo-black-mini.svg" alt="mini logo" />
      </div>
      <label>
        <input type="checkbox" />

        <span class="menu">
          <span class="hamburger"></span>
        </span>

        <ul>
          <li><a href="signin">Sign In</a></li>
          <li><a href="about">About Look Up</a></li>
          <li><a href="products">Products</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
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

        <a class="function-button" href="/addproduct">
          <i class="fa-solid fa-square-plus"></i>
          Add new product
        </a>

        <form action="">
          <input name="text" type="text" placeholder="Search for product..." />
        </form>
      </section>

      <section class="products">
        <div class="product-tile">
          <div class="image">
            <img src="public/uploads/3.png" alt="" />
          </div>
          <div class="rating-and-reviews">
            <h6>189 REVIEWS</h6>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
            </div>
            <div class="recommendation">
              <i class="fa-solid fa-face-smile"></i>
            </div>
          </div>
          <div class="name">
            <h5>
              Bio Oil Olejek do twarzy
            </h5>
          </div>
        </div>

        <div class="product-tile">
          <div class="image">
            <img src="public/uploads/3.png" alt="" />
          </div>
          <div class="rating-and-reviews">
            <h6>189 REVIEWS</h6>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
            </div>
            <div class="recommendation">
              <i class="fa-solid fa-face-meh"></i>
            </div>
          </div>
          <div class="name">
            <h5>
              Bio Oil Olejek do twarzy
            </h5>
          </div>
        </div>

        <div class="product-tile">
          <div class="image">
            <img src="public/uploads/3.png" alt="" />
          </div>
          <div class="rating-and-reviews">
            <h6>189 REVIEWS</h6>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
            </div>
            <div class="recommendation">
              <i class="fa-solid fa-face-frown"></i>
            </div>
          </div>
          <div class="name">
            <h5>
              Bio Oil Olejek do twarzy
            </h5>
          </div>
        </div>

        <div class="product-tile">
          <div class="image">
            <img src="public/uploads/3.png" alt="" />
          </div>
          <div class="rating-and-reviews">
            <h6>189 REVIEWS</h6>
            <div class="stars">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star-half"></i>
            </div>
            <div class="recommendation">
              <i class="fa-solid fa-face-meh-blank"></i>
            </div>
          </div>
          <div class="name">
            <h5>
              Bio Oil Olejek do twarzy
            </h5>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer-bg">
      <div class="logo">
        <img src="public/img/logo-white.svg" alt="Look Up logo" />
      </div>
      <div class="copyrights">
        <p>© 2023 Look Up. All rights reserved</p>
      </div>
    </footer>
  </div>
</body>