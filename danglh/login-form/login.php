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
    <form action="login.php" method="post">
      <input class="login-form_username" type="text" name="username" placeholder="Username" required>
      <input class="login-form_password" type="password" name="password" placeholder="Password" required>
      <?php
      if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $password=$_POST['password'];
        if(($_SESSION['user']['username']==$user)&&($_SESSION['user']['password']==$password)){
          $_SESSION['right-account']=$_SESSION['user']['username'];
          header('location: index.php');
          } else {echo '<p>Account does not exist or Wrong password</p>';}
        }
      ?>
      <input class="submit" name="submit" type="submit" value="Login">
    </form>
    <div class="message">New user? <a href="register.php">Create an account</a></div>
  </div>
</body>

</html>
