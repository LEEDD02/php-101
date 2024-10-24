<?php
$id = $_GET['id'];
require 'check_login.php';
require '../model/connect.php';
$sql = "delete from product where id='$id'";
mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:../index.php?page=product');
