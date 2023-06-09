<!DOCTYPE html>

<head>
  <title>Look Up | Sign Up</title>
  <?php include('shared/head-links.php') ?>
  <script src="../../public/js/script.js" type="text/javascript" defer></script>
</head>

<body>
  <div class="wrapper">
    <?php include('shared/header.php') ?>

    <main>
      <section class="view-description">
        <h2>Sign Up</h2>
        <p>
          At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
          atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
          culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est
          et expedita distinctio.
        </p>
      </section>

      <section class="sign-up">
        <div class="sign-up-form">
          <form action="signup" method="POST">
            <input name="name" type="text" placeholder="Name" />
            <input name="surname" type="text" placeholder="Surname" />

            <input name="mobile" type="text" placeholder="Mobile" />
            <input name="email" type="email" placeholder="Email" />

            <input name="role" type="text" placeholder="Role" />

            <input name="password" type="password" placeholder="Password" />
            <input name="confirmedPassword" type="password" placeholder="Confirm password" />

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
              Sign Up
            </button>
          </form>
        </div>
      </section>
    </main>

    <?php include('shared/footer.php') ?>
  </div>
</body>