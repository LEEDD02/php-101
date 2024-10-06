<?php
session_start();
ob_start();
if (isset($_POST['register_submit'])) {
  $fullname = $_POST['fullname'];
  $user_name = $_POST['user_name'];
  $pwd = $_POST['confirm_password'];
  $email = $_POST['email'];
  $date = $_POST['date'];

  require 'model/connect.php';
  $sql = "select count(*) from client where email = '$email'";
  $result = mysqli_query($conn, $sql);
  $number_rows = mysqli_fetch_array($result)['count(*)'];
  if ($number_rows == 1) {
    header('location: register.php');
  } else {
    $sql = "INSERT INTO client (fullname, user_name, pwd, email, date) 
  VALUES ('$fullname', '$user_name', '$pwd', '$email', '$date')";
    mysqli_query($conn, $sql);
    $_SESSION['id_user'] = mysqli_insert_id($conn);
    header('location: index.php');
  }
}
