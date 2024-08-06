<?php
session_start();
ob_start();
unset($_SESSION['right-account']);
header('location:index.php');
