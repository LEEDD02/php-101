<?php
session_start();
ob_start();
$user_name = $_POST['user_name'];
$pwd = $_POST['pwd'];
if(isset($_POST['login_btn'])) {
  require 'model/connect.php';
  $sql = "select * from admin
  where user_name = '$user_name' and pwd = '$pwd'";
  $result = mysqli_query($conn,$sql);
  $number_rows = mysqli_num_rows($result);

  if($number_rows == 1) {
    $data = mysqli_fetch_array($result);
    $_SESSION['user_name'] = $data['user_name'];
    $_SESSION['level'] = $data['level'];
    echo $_SESSION['level'];
    header('location: index.php?page=home');
    exit;
  } 
  header('location: index.php');
}
