<?php
session_start();
ob_start();
unset($_SESSION['right-account']);
unset($_SESSION['txt_error']);
header('location:index.php');
