<?php
  require '../check_login.php';
  require '../model/connect.php';
  $sql = "select 
  orders.*,
  client.fullname as client_fullname,
  client.email as client_email,
  client.phone_number as client_phone_number
  from orders 
  join client 
  on client.id = orders.client_id"; 
  $order = mysqli_query($conn,$sql);
  mysqli_close($conn);
?>

<table width=100%>
  <tr>
    <td>Order ID</td>
    <td>Receiver Information</td>
    <td>Orderer Information</td>
    <td>Status</td>
    <td>Total Price</td>
    <td>Order Date</td>
  </tr>
  <?php foreach ($order as $item) {?>
  <tr>
    <td><?=$item['id']?></td>
    <td>
      <?=$item['receiver']?></br>
      <?=$item['phone_number_receiver']?></br>
      <?=$item['address']?></br>
    </td>
    <td>
      <?=$item['client_fullname']?></br>
      <?=$item['client_phone_number']?></br>
      <?=$item['client_email']?></br>
    </td>
    <td>
      <?php
      switch ($item['status']) {
        case '0':
          echo 'New order';
          break;
        
      case '1':
          echo 'Approved order';
          break;

      case '2':
          echo 'Cancelled order';
          break;
        }
      ?>
    </td>
    <td><?=$item['total_price']?></td>
    <td><?=$item['date']?></td>
    <td><a href="../admin/index.php?page=detail_order&&id=<?=$item['id']?>">Detail</a></td>
    <td><a href="../admin/index.php?page=update_order&&id=<?=$item['id']?>&&status=1">Approve</a></td>
    <td><a href="../admin/index.php?page=update_order&&id=<?=$item['id']?>&&status=2">Cancel</a></td>
  </tr>
  <?php }?>
</table>
