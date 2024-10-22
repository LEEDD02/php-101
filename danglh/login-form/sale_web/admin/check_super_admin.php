<?php
session_start();
ob_start();
if(isset($_SESSION['level']) && $_SESSION['level'] !==1 ) {
  header('location: ../admin/index.php?page=home&&error=error');
} 
