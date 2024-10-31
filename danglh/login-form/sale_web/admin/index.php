<?php
session_start();
ob_start();
include 'header.php';
if (!isset($_GET['page'])) {
  include 'login.php';
} else {
  switch ($_GET['page']) {
    case 'home':
      include 'home.php';
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
    case 'detail_order':
      include 'order/detail_order.php';
      break;
    case 'update_order':
      include 'order/update_order.php';
      break;
    case 'statistic':
      include 'statistic/statistic.php';
      break;
  }
}
include 'footer.php';
