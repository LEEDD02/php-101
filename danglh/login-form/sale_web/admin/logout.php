<?php
session_start();
ob_start();

unset($_SESSION['user_name']);
unset($_SESSION['level']);
header('location: index.php');
