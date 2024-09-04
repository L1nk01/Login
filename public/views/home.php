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
    <div class="home-container">
      <?php echo "<h1>Welcome back, " . $userSession->getCurrentUser() . "!</h1>"; ?>
      
      <a href="includes/logout.php" type="submit" value="Log In" class="login-btn btn">Log Out</a>
    </div>
  </div>
</body>

</html>