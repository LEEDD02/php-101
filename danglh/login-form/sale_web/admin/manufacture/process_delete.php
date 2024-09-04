<?php
$id = $_GET['id'];
require '../model/connect.php';
$sql = "delete from manufactures where id='$id'";
mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:manufacture.php');
