<!DOCTYPE html>

<head>
  <title>Look Up | Sign In</title>
  <?php include('shared/head-links.php') ?>
</head>

<body>
  <div class="wrapper">
    <?php include('shared/header.php') ?>

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

    <?php include('shared/footer.php') ?>
  </div>
</body>