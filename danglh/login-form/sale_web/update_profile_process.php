<?php
session_start();
ob_start();
$id = $_SESSION['id_user'];
if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $user_name = $_POST['user_name'];
  $date = $_POST['date'];
  $address = $_POST['address'];
  $phone_number = $_POST['phone_number'];

  require 'model/connect.php';
  $sql = "update 
  client 
set 
  fullname = '$fullname',
  email = '$email',
  user_name = '$user_name',
  date = '$date',
  address = '$address',
  phone_number = '$phone_number'
where 
  id = '$id'";
  mysqli_query($conn,$sql);
  header('location: index.php?page=profile');
}
