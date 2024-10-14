<?php
session_start();
ob_start();
require 'model/connect.php';
include 'header.php';

if (!isset($_GET['page'])) {
  include 'banner.php';
  exit;
} else {
  $page = $_GET['page'];
  switch ($page) {
    case 'mobilephone':
      include 'mobilephone.php';
      break;
    case 'tablet':
      include 'tablet.php';
      break;
    case 'laptop':
      include 'laptop.php';
      break;
    case 'product_detail':
      include 'product_detail.php';
      break;
    case 'cart';
      include 'cart.php';
      break;
    case 'process_cart';
      include 'process_cart.php';
      break;
    default:
      include 'home.php';
      break;
  }
};

include 'footer.php';
