<?php
  require 'check_login.php';
  require '../model/connect.php';
  $sql = 'select * from manufactures';
  $data = mysqli_query($conn, $sql);
  ?>

<a href="index.php?page=home">Home</a>
<br>
<a href="../admin/manufacture/form_insert.php">Add Manufacture</a>


<table width=100%>
  <tr>
    <td>Id</td>
    <td>Brand Name</td>
    <td>Address</td>
    <td>Phone Number</td>
    <td>img</td>
  </tr>
  <?php foreach ($data as $item) { ?>
  <tr>
    <td><?= $item['id'] ?></td>
    <td><?= $item['brand_name'] ?></td>
    <td><?= $item['address'] ?></td>
    <td><?= $item['phone_number'] ?></td>
    <td>
      <img height="100" src="<?= $item['img'] ?>" alt="">
    </td>
    <td><a href="../admin/manufacture/form_update.php?id=<?= $item['id'] ?>">Update</a></td>
    <td><a href="../admin/manufacture/process_delete.php?id=<?= $item['id'] ?>">Delete</a></td>
  </tr>
  <?php } ?>
</table>
