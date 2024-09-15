<?php
if (
  empty($_POST['brand_name']) || empty($_POST['address']) ||
  empty($_POST['phone_number']) || empty($_POST['img'])
){
  header('location:form_insert.php');
};
$brand_name = $_POST['brand_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$img = $_POST['img'];
require '../model/connect.php';
$sql = "insert into manufactures(brand_name,address,phone_number,img)
value ('$brand_name','$address','$phone_number','$img')";
mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:manufacture.php');
