<?php
session_start();
ob_start();
if(isset($_POST['login_submit'])) {
  include 'model/connect.php';
  $user_name = $_POST['user_name'];
  $pwd = $_POST['pwd'];
  $sql = "select * from client where user_name='$user_name' and pwd='$pwd'";
  $result = mysqli_query($conn,$sql);
  $number_rows = mysqli_num_rows($result);

  if($number_rows == 1) {
    $data = mysqli_fetch_array($result);
    $_SESSION['id_user']=$data['id'];
    header('location: index.php');
    mysqli_close($conn);
    unset($_SESSION['error']);
  } else {
    $_SESSION['error'] = '<span class="text_error">Username or password does not exit</span>';
    header('location: login.php');
  }
}
