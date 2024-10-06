<?php
session_start();
ob_start();
require 'model/connect.php';
include 'header.php';

if (!isset($_GET['page'])) {
  include 'home.php';
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
    default:
      include 'home.php';
      break;
  }
};

include 'footer.php';
