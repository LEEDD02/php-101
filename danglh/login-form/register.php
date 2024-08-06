<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoundOfEnglish</title>
  <link rel="stylesheet" href="css/register.css">
  <script src="js/register.js"></script>
</head>

<body>
  <div class="login-form">
    <h2>Register</h2>
    <form action="get_data.php" method="post">
      <input class="login-form_username" type="text" name="username" placeholder="Username" required>
      <input class="login-form_password" id="password" type="password" name="password" placeholder="Password" required>
      <input class="login-form_confirm-password" id="confirm_password" type="password" name="confirm-password"
        placeholder="Confirm Password" required>
      <input class="login-form_email" type="email" name="email" placeholder="Email" required>
      <input class="submit" type="submit" onclick="return checking()" name="btn-submit" value="Register">
    </form>
  </div>
</body>

</html>
