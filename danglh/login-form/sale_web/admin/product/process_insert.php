<?php
require 'check_login.php';
if (
  empty($_POST['product_name']) || empty($_POST['price']) ||
  empty($_POST['img']) || empty($_POST['type'])
){
  header('location:form_insert.php');
};
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$img = $_FILES['img'];
$type = $_POST['type'];
$manufactures = $_POST['manufactures'];
print_r($_POST) ;


//van dang loi viec up anh
$folder = 'img/';
$path_file = $folder.basename($img["name"]);
move_uploaded_file($img["tmp_name"], $path_file);


require '../model/connect.php';
$sql = "insert into product(product_name,price,img,type,manufactures)
value ('$product_name','$price','$img','$type','$manufactures')";
mysqli_query($conn, $sql);
mysqli_close($conn);
header('location: ../index.php?page=product');
