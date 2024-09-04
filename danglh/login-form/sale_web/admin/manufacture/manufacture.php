<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <a href="form_insert.php">Add Manufacture</a>
  <?php
  require '../model/connect.php';
  $sql = 'select * from manufactures';
  $data = mysqli_query($conn, $sql);
  ?>

  <table width=100%>
    <tr>
      <td>Id</td>
      <td>Brand Name</td>
      <td>Address</td>
      <td>Phone Number</td>
      <td>img</td>
    </tr>
    <?php foreach($data as $item) {?>
    <tr>
      <td><?=$item['id']?></td>
      <td><?=$item['brand_name']?></td>
      <td><?=$item['address']?></td>
      <td><?=$item['phone_number']?></td>
      <td>
        <img height="100" src="<?=$item['img']?>" alt="">
      </td>
      <td><a href="form_update.php?id=<?=$item['id']?>">Update</a></td>
      <td><a href="process_delete.php?id=<?=$item['id']?>">Delete</a></td>
    </tr>
    <?php } ?>
  </table>

</body>

</html>
