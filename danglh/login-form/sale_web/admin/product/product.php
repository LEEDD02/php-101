<a href="index.php?page=home">Home</a>
<br>
<a href="./product/form_insert.php">Add Product</a>
<?php
  require 'check_login.php';
  require '../model/connect.php';
  $sql = 'select product.*, manufactures.brand_name as manufactures_brand_name
  from product
  join manufactures on product.manufactures = manufactures.id';
  $data = mysqli_query($conn, $sql);
  ?>

<table width=100%>
  <tr>
    <td>Id</td>
    <td>Product Name</td>
    <td>Price</td>
    <td>Img</td>
    <td>Type</td>
    <td>Manufactures</td>
  </tr>
  <?php foreach($data as $item) {?>
  <tr>
    <td><?=$item['id']?></td>
    <td><?=$item['product_name']?></td>
    <td><?=$item['price']?></td>
    <td>
      <img height="100" src="<?=$item['img']?>" alt="">
    </td>
    <td><?=$item['type']?></td>
    <td><?=$item['manufactures_brand_name']?></td>
    <td><a href="./product/form_update.php?id=<?=$item['id']?>">Update</a></td>
    <td><a href="./product/process_delete.php?id=<?=$item['id']?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>
