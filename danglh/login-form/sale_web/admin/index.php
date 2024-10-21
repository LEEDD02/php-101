<?php
session_start();
ob_start();
include 'header.php';
if (!isset($_GET['page'])) {
  include 'login.php';
} else {
  switch ($_GET['page']) {
    case 'menu':
      include 'menu.php';
      break;
    case 'manufacture':
      include 'manufacture/manufacture.php';
      break;
    case 'product':
      include 'product/product.php';
      break;
    case 'order':
      include 'order/order.php';
      break;
  }
}
include 'footer.php';
