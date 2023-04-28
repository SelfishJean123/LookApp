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
      </section>

      <section class="add-product-section">
        <h4>Add New Product</h4>
        <form action="addproduct" method="POST" enctype="multipart/form-data">
          <input name="name" type="text" placeholder="Product's name" />
          <textarea name="ingredients" id="" cols="30" rows="5" placeholder="Product's ingredients"></textarea>
          <input name="file" type="file" placeholder="Product's image" />
          <button type="submit">ADD</button>

          <div class="messages">
            <?php
            if (isset($messages)) {
              foreach ($messages as $message) {
                echo $message;
              }
            }
            ?>
          </div>

        </form>
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

    <div class="overlay"></div>
  </div>
</body>