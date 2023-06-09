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
      <li><a href="/">Home</a></li>
      <?php if (!$_SESSION) { ?>
        <li><a href="signin">Sign In</a></li>
        <li><a href="signup">Sign Up</a></li>
      <?php } else { ?>
        <li><a href="signout">Sign Out</a></li>
      <?php } ?>
      <li><a href="about">About Look Up</a></li>
      <?php if ($_SESSION['ROLE'] == 'viewer' || $_SESSION['ROLE'] == 'editor') { ?>
        <li><a href="products">Products</a></li>
      <?php } ?>
      <li><a href="contact">Contact</a></li>
    </ul>
  </label>
</header>