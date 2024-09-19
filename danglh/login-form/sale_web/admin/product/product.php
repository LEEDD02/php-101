<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <a href="../index.php">Home</a>
  <br>
  <a href="form_insert.php">Add Product</a>
  <?php
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
      <td><a href="form_update.php?id=<?=$item['id']?>">Update</a></td>
      <td><a href="process_delete.php?id=<?=$item['id']?>">Delete</a></td>
    </tr>
    <?php } ?>
  </table>

</body>

</html>
