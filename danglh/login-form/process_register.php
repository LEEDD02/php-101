<?php
require_once 'model/connect.php';

if(isset($_POST['btn-submit'])) {
  echo '<pre>';
  print_r($_POST);
  $fullname = $_POST['fullname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $sql= "INSERT INTO 'user' ('fullname', 'username', 'password', 'email')
VALUES ('$fullname', '$username', '$password', '$email')";
echo $sql;
if(pdo_get_connection()>$conn->query($sql)===true) {
  echo ' luu du lieu thanh cong';}
  else {
    echo 'loi {$sql}'.$conn->error;
  }
}
