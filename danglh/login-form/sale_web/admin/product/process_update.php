<?php
require '../check_login.php';
// if (
//   empty($_POST['brand_name']) || empty($_POST['address']) ||
//   empty($_POST['phone_number']) || empty($_POST['img'])
// ) {
//   header('location:form_update.php');
// };
if(isset($_POST['submit'])) {
$id = $_POST['id'];
$product_name = $_POST['product_name'];   
$price = $_POST['price'];
$type = $_POST['type'];
$manufactures = $_POST['manufactures'];

$img=$_FILES["img"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($img["name"]);
print_r($target_file);

if (move_uploaded_file($img["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars(basename( $img["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }


// $folder = "photos/";
// $file_extension = explode('.', $_FILES['img']['name'])[1];
// $path_file = $folder . time() . '.' . $file_extension;
// print_r($path_file);

// move_uploaded_file($_FILES['img']['tmp_name'], $path_file);


// require '../model/connect.php';
// $sql = "update product
// set
// product_name='$product_name',
// price='$price',
// img='$img',
// type='$type',
// manufactures='$manufactures'
// where id='$id'
// ";
// print_r($_POST);
// mysqli_query($conn, $sql);
// mysqli_close($conn);
// header('location: ../index.php?page=product');
}
