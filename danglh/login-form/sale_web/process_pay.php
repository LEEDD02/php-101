<?php
session_start();
ob_start();
$id = $_SESSION['id_user'];

if (isset($_POST['pay_btn'])) {
  $client_id = $id;
  $receiver = $_POST['fullname'];
  $phone_number_receiver = $_POST['phone_number'];
  $address = $_POST['address'];
  $status = 0;
  $total_price = 0;
  $date = date(DATE_RFC822);

  $cart = $_SESSION['cart'];
  foreach ($cart as $item) {
    $total_price += $item['quantity'] * $item['price'];
  }
  
  include 'model/connect.php';
  $sql= "INSERT INTO orders (client_id,receiver,phone_number_receiver,address,status,total_price,date) 
  VALUES('$client_id','$receiver','$phone_number_receiver','$address','$status','$total_price','$date')";
  mysqli_query($conn, $sql);
  $order_id = mysqli_insert_id($conn);

  foreach ($cart as $product_id => $value) {
    $quantity = $value['quantity'];
    $sql = "insert into order_product (order_id,product_id,quantity)
    values ('$order_id','$product_id','$quantity')";
    mysqli_query($conn, $sql);
    
  }
  unset($_SESSION['cart']);
  mysqli_close($conn);
  header('location: index.php?page=cart');
};
