<?php
session_start();
ob_start();

if(empty($_SESSION['id_user'])){
  $id = $_GET['id'];
  header('location: index.php?page=product_detail&&id='.$id.'&&error=login_error');
} else {
$id = $_GET['id'];
echo $id;
if(empty($_SESSION['cart'][$id])){
include 'model/connect.php';
$sql = "select * from product where id = '$id'";
$result = mysqli_query($conn,$sql);
$data= mysqli_fetch_array($result);
$_SESSION['cart'][$id]['product_name']=$data['product_name'];
$_SESSION['cart'][$id]['price']=$data['price'];
$_SESSION['cart'][$id]['quantity']=1;

} else {
$_SESSION['cart'][$id]['quantity']++;

}
// print_r($_SESSION['cart']);

header('location:index.php?page=cart');

}
