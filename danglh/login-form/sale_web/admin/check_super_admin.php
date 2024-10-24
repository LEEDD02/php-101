<?php
session_start();
ob_start();
if($_SESSION['level'] < 1 ) {
  echo 1;
  header('location: index.php?page=home&&error=error');
} 
