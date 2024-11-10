<?php

$hostname = "127.0.0.1";
$username = "danglh";
$password = "password";
$dbname = 'project_2';
$conn = mysqli_connect($hostname, $username, $password, $dbname);



if(isset($_GET['action'])) {
  $action = $_GET['action'];
}
switch ($action) {
  case 'store':
    $sql = "insert into students (name) values ('$name')";
    $result = mysqli_query($conn,$sql);
    break;  

  case 'update':
    $sql = "update students set name = '$name' where id = '$id'";
    $result = mysqli_query($conn,$sql);
    break;   

    case 'delete':
      $sql = "delete from students where id = '$id'";
      $result = mysqli_query($conn,$sql);
      break;   

  case 'edit':
    $sql = "select * from students where id = '$id'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_array($result);
    break;
  
  default:
    $sql = "select * from students";
    $result = mysqli_query($conn,$sql);
    break;
}
