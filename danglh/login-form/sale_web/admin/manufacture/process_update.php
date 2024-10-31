<?php
require '../check_login.php';
if (
  empty($_POST['brand_name']) || empty($_POST['address']) ||
  empty($_POST['phone_number']) || empty($_POST['img'])
) {
  header('location:form_update.php');
};
$id = $_POST['id'];
$brand_name = $_POST['brand_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$img = $_POST['img'];
require '../model/connect.php';
$sql = "update manufactures
set
brand_name='$brand_name',
address='$address',
phone_number='$phone_number',
img='$img'
where id='$id'
";
mysqli_query($conn, $sql);
mysqli_close($conn);
header('location: ../index.php?page=manufacture');
