<?php
require 'check_super_admin.php';
require '../model/connect.php';
if(isset($_GET['id'])){
$order_id = $_GET['id'];
$sql = "select * from order_product
join product on order_product.product_id = product.id
where order_id = '$order_id'";
$result = mysqli_query($conn,$sql);
$total_price=0;
mysqli_close($conn);
} else {
  header('location: index.php?page=order');
}
?>

<table width=100%>
  <tr>
    <td>Order Id</td>
    <td>Product Name</td>
    <td>Price</td>
    <td>Img</td>
    <td>Quantity</td>
    
  </tr>
  <?php foreach ($result as $item) {?>
  <tr>
    <td><?=$item['order_id']?></td>
    <td><?=$item['product_name']?></td>
    <td><?=$item['price']?></td>
    <td>Img</td>
    <td><?=$item['quantity']?></td>
    <td>
      <?php 
    $sum = $item['price'] * $item['quantity'];
    echo $sum;
    $total_price += $sum;
    ?></td>
  </tr>
  <?php }?>
</table>
<h1>Total price = <?php echo $total_price?></h1>
