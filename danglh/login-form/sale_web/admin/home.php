<?php
require 'check_login.php';
?>


Giao dien admin;
<ul>
  <li><a href="index.php?page=manufacture">Manufactures</a></li>
  <li><a href="index.php?page=product">Product</a></li>
  <li><a href="index.php?page=order">Order</a></li>
  <li><a href="index.php?page=statistic">Statistic</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<?php
if(isset($_GET['error'])){
  echo '<h3>You are not super admin</h3>';
}
?>
