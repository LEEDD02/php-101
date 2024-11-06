<?php
session_start();
ob_start();
require 'model/connect.php';
include 'header.php';

if (!isset($_GET['page'])) {
  include 'banner.php';
  include 'home.php';
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
    case 'profile';
      include 'profile.php';
      break;
    case 'update_profile';
      include 'update_profile.php';
      break;
    case 'change_pwd';
      include 'change_pwd.php';
      break;
  }
};

include 'footer.php';
