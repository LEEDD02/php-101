<?php
session_start();
ob_start();
if(isset($_SESSION['id_user'])){
  unset($_SESSION['id_user']);
  unset($_SESSION['cart']);
  header('location: index.php');
}
