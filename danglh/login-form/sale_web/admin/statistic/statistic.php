<?php
require 'check_login.php';
require '../model/connect.php';
$sql = "SELECT
product.id ,
product.product_name,
IFNULL(SUM(order_product.quantity),0)as quantity_sales
FROM product 
LEFT JOIN order_product on order_product.product_id = product.id
LEFT JOIN orders on orders.id = order_product.order_id
WHERE orders.status = 1 or orders.id is NULL
GROUP BY product.id
ORDER BY quantity_sales DESC";
$data = mysqli_query($conn,$sql);
?>
<h1>Best-selling products</h1>
<table>
  <tr>
    <td>Product ID</td>
    <td>Product Name</td>
    <td>Total Quantity Sold</td>
  </tr>
  <?php foreach ($data as $item) {?>
  <tr>
    <td><?=$item['id']?></td>
    <td><?=$item['product_name']?></td>
    <td><?=$item['quantity_sales']?></td>
  </tr>
  <?php }?>


</table>
