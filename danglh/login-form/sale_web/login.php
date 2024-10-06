<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>Login</title>
</head>

<body>
  <div class="background">
    <div class="login-form">
      <h2>Login</h2>
      <hr>
      <form action="process_login.php" method="post">
        <input class="login-form_username" type="text" name="user_name" placeholder="Username" required>
        <input class="login-form_password" type="password" name="pwd" placeholder="Password" required>
        <?php
        if(isset($_SESSION['error'])) {
          echo $_SESSION['error'];
        }
        ?>
        <h3><a href="">Forgot password?</a></h3>
        <input class="submit" name="login_submit" type="submit" value="Login">
      </form>
      <div class="message">New user? <a href="register.php">Create an account</a></div>
    </div>
  </div>

</body>

</html>
