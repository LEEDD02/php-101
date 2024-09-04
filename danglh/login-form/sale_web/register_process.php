<?php
if (isset($_POST['register_submit'])) {
  $fullname= $_POST['fullname'];
  $username= $_POST['username'];
  $password= $_POST['password'];
  $email= $_POST['email'];
  $date= $_POST['date'];
  echo '<pre>';
  print_r($_POST);
  require 'model/connect.php';
  $sql = "INSERT INTO client (fullname, username, password, email, date) 
  VALUES ('$fullname', '$username', '$password', '$email', '$date')";
  mysqli_query($conn, $sql);
}
