<?php
require 'check_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="process_insert.php" method="post">
    Brand Name
    <input type="text" name="brand_name" id="">
    <br>
    Address
    <textarea name="address" id=""></textarea>
    <br>
    Phone Number
    <input type="text" name="phone_number">
    <br>
    IMG
    <input type="text" name="img">
    <br>
    <button type="submit">Add</button>
  </form>
</body>

</html>
