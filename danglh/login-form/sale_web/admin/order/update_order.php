<?php
require 'check_super_admin.php';
require '../model/connect.php';
if(isset($_GET['id']) && isset($_GET['status'])) {
  $id = $_GET['id'];
  $status = $_GET['status'];
  $sql = "update 
  orders 
  set status = '$status'
  where id = '$id'";
  mysqli_query($conn,$sql);
  mysqli_close($conn);
  header('location: index.php?page=order');
}
