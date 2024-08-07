<?php
session_start();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoundOfEnglish</title>
  <link rel="stylesheet" href="css/login.css">

</head>

<body>
  <div class="login-form">
    <h2>Login</h2>
    <form action="process_login.php" method="post">
      <input class="login-form_username" type="text" name="username" placeholder="Username" required>
      <input class="login-form_password" type="password" name="password" placeholder="Password" required>
      <?php
      if(isset($_SESSION['txt_error'])) {
        echo $_SESSION['txt_error'];
      }
      ?>

      <!-- Tim cach submit form vao file process_login (lam sao de chuyen huong sang file process_login) -->
      <!-- maybe done -->
      <!-- GET vs POST la gi phan biet ? https://www.w3schools.com/tags/ref_httpmethods.asp -->
      <!-- Method get : may chu nhan du lieu tu clients thong qua url 
      method post : du lieu duoc gui thong qua http header, bao mat so voi get.  -->

      <input class="submit" name="submit" type="submit" value="Login">
    </form>
    <div class="message">New user? <a href="register.php">Create an account</a></div>
  </div>
</body>

</html>
