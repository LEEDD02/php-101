<?php
session_start();
ob_start();
$id = $_SESSION['id_user'];
if(isset($_POST['submit'])) {
  $current_pwd = $_POST['current_pwd'];
  $new_pwd = $_POST['new_pwd'];
  $confirm_pwd = $_POST['confirm_pwd'];

  require 'model/connect.php';
  $sql = "select * from client 
  where id = '$id'";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($result);

  if($current_pwd === $data['pwd']) {
    $sql = "update client
    set pwd= '$new_pwd'
    where id='$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
  } else {
    header('location: index.php?page=change_pwd&&error=error');
  }
} else {
  header('index.php?page=profile');
}
