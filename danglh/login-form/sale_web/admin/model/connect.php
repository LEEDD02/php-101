<?php
$hostname = "127.0.0.1";
$username = "danglh";
$password = "password";
$dbname = 'demo_db';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');
