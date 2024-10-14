<?php
session_start();
ob_start();
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
