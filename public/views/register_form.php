<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Register</title>

  <link rel="stylesheet" href="../stylesheets/styles.css">
  <script src="../src/index.js" defer></script>
</head>

<body>
  <div class="form-box">
    <div class="left-side">
      <form class="login" action="../../includes/register.php" method="POST">

        <div id="login-header">
          <h1>Register Here</h1>
        </div>

        <div id="username-label">
          <label for="username">Choose a username</label>
          <input type="text" placeholder="Username" id="username" name="username" class="input"></label>
        </div>

        <div id="password-label">
          <label for="password">Choose a password</label>
          <input type="password" placeholder="Password" id="password" name="password" class="input"></label>
        </div>

        <a href="/login">Already registered? Login here</a>
        <button type="submit" value="Log In" class="login-btn btn">Register</button>
      </form>
    </div>

    <div class="right-side"></div>
  </div>
</body>

</html>