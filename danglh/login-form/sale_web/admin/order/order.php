<?php
  require '../model/connect.php';
  $sql = "select * from orders";
  $order = mysqli_query($conn,$sql);
  mysqli_close($conn);
?>

<table width=100%>
  <tr>
    <td>Orderer</td>
    <td>Receiver</td>
    <td>Phone Number</td>
    <td>Address</td>
    <td>Status</td>
    <td>Total Price</td>
    <td>Order Date</td>
  </tr>
  <?php foreach ($order as $item) {?>
  <tr>
    <td><?=$item['client_id']?></td>
    <td><?=$item['receiver']?></td>
    <td><?=$item['phone_number_receiver']?></td>
    <td><?=$item['address']?></td>
    <td><?=$item['status']?></td>
    <td><?=$item['total_price']?></td>
    <td><?=$item['date']?></td>
    <td><a href="">Update</a></td>
    <td><a href="">Add</a></td>
  </tr>
  <?php }?>
</table>
