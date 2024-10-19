<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/register.css">
  <script src="js/register_validate.js" defer></script>
  <title>Login</title>
</head>

<body>
  <div class="background">
    <div class="register-form">
      <h2>Register</h2>
      <hr>
      <form action="register_process.php" method="post">
        <input class="register_fullname" id="fullname" type="text" name="fullname" placeholder="Fullname">
        <span id="fullname_error" class="text_error"></span>
        <input class="register_username" id="username" type="text" name="user_name" placeholder="Username">
        <span id="username_error" class="text_error"></span>
        <input class="register_password" id="password" type="password" name="password" placeholder="Password">
        <span id="password_error" class="text_error"></span>
        <input class="register_confirm_password" type="password" id="confirm_password" name="confirm_password"
          placeholder="Confirm Password">
        <span id="confirm_password_error" class="text_error"></span>
        <input class="register_date" id="date" type="date" name="date" placeholder="Date Of Birth">
        <span id="date_error" class="text_error"></span>
        <input class="register_email" id="email" type="email" name="email" placeholder="Email">
        <span id="email_error" class="text_error"></span>
        <input class="register_email" id="phone_number" type="phone_number" name="phone_number"
          placeholder="Phone Number">
        <span id="phone_error" class="text_error"></span>
        <input class="register_email" id="address" type="address" name="address" placeholder="Address">
        <span id="address_error" class="text_error"></span>
        <input class="submit" onclick="return check_form()" name="register_submit" type="submit" value="Submit">
      </form>
    </div>
  </div>

</body>

</html>
