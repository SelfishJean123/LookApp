<!DOCTYPE html>

<head>
  <title>Look Up | Sign In</title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="public/css/style.css" />
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
        <h2>Sign In</h2>
        <p>
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque
          corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
          culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est
          et
          expedita distinctio.
        </p>
      </section>

      <section class="sign-in">
        <div class="sign-in-form">
          <form action="signin" method="POST">
            <input name="email" type="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <p class="form-messages">
              <?php
              if (isset($messages)) {
                foreach ($messages as $message) {
                  echo $message;
                }
              }
              ?>
            </p>
            <button type="submit" class="function-button">
              Sign In
            </button>
          </form>
        </div>
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