<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>

  <link rel="stylesheet" href="public/stylesheets/styles.css">
  <script src="public/src/index.js" defer></script>
</head>

<body>
  <div class="form-box">
    <div class="left-side">
      <form class="login" action="" method="POST">

        <div id="login-header">
          <h1>
            Login Here
          </h1>

          <?php
          if (isset($errorLogin)) {
            echo "<span>" . $errorLogin . "</span>";
          }
          ?>
        </div>

        <div id="username-label">
          <label for="username">Username</label>
          <input type="text" placeholder="Username" id="username" name="username" class="input"></label>
        </div>

        <div id="password-label">
          <label for="password">Password</label>
          <input type="password" placeholder="Password" id="password" name="password" class="input"></label>
        </div>

        <a href="./public/views/register_form.php">Not registered? Create your account here</a>
        <button type="submit" value="Log In" class="login-btn btn">Log In</button>
      </form>
    </div>

    <div class="right-side"></div>
  </div>
</body>

</html>