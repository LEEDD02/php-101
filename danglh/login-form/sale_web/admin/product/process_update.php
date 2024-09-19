<?php
// if (
//   empty($_POST['brand_name']) || empty($_POST['address']) ||
//   empty($_POST['phone_number']) || empty($_POST['img'])
// ) {
//   header('location:form_update.php');
// };
$id = $_POST['id'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];
$img = $_FILES['img'];
$type = $_POST['type'];
$manufactures = $_POST['manufactures'];
print_r($_POST);
require '../model/connect.php';
$sql = "update product
set
product_name='$product_name',
price='$price',
img='$img',
type='$type',
manufactures='$manufactures'
where id='$id'
";
print_r($_POST);
mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:product.php');
