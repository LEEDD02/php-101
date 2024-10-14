<?php
session_start();
$id = $_GET['id'];
$action = $_GET['action'];
switch ($action) {
  case 'decrease';
    if($_SESSION['cart'][$id]['quantity']>1) {
        $_SESSION['cart'][$id]['quantity']--;
      } else {
        unset($_SESSION['cart'][$id]);}
    break;
  case 'increase';
    $_SESSION['cart'][$id]['quantity']++;
    break;
  case 'delete';
    unset($_SESSION['cart'][$id]);
    break;
  default:
    break;
};

header('location: index.php?page=cart');
