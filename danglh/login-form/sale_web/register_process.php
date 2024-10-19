<?php
session_start();
ob_start();
if (isset($_POST['register_submit'])) {
  $fullname = $_POST['fullname'];
  $user_name = $_POST['user_name'];
  $pwd = $_POST['confirm_password'];
  $email = $_POST['email'];
  $date = $_POST['date'];
  $address = $_POST['address'];
  $phone_number = $_POST['phone_number'];


  require 'model/connect.php';
  $sql = "select count(*) from client where email = '$email'";
  $result = mysqli_query($conn, $sql);
  $number_rows = mysqli_fetch_array($result)['count(*)'];
  if ($number_rows == 1) {
    mysqli_close($conn);
    header('location: register.php');
  } else {
    $sql = "INSERT INTO client (fullname, user_name, pwd, email, date, address, phone_number) 
  VALUES ('$fullname', '$user_name', '$pwd', '$email', '$date', '$address', '$phone_number')";
    mysqli_query($conn, $sql);
    $_SESSION['id_user'] = mysqli_insert_id($conn);
    mysqli_close($conn);
    header('location: index.php');
  }
}
