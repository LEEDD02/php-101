<?php
require 'model/connect.php';
include 'header.php';

If(!isset($_GET['page'])){
  include 'banner.php';
  include 'mobilephone.php';
} else {
  include $_GET['page'].'.php';
};

include 'footer.php';
