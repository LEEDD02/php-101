<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require '../check_login.php';
  if(isset($_GET['id'])){
    require '../model/connect.php';
    $id = $_GET['id'];
    $sql= "select * from manufactures where id='$id'";
    $data = mysqli_query($conn,$sql);
    $item = mysqli_fetch_array($data);
  }
  
  ?>
  <form action="process_update.php" method="post">
    <input type="hidden" name="id" value="<?=$item['id']?>">
    Brand Name
    <input type="text" name="brand_name" id="" value="<?=$item['brand_name']?>">
    <br>
    Address
    <textarea name="address" id=""><?=$item['address']?></textarea>
    <br>
    Phone Number
    <input type="text" name="phone_number" value="<?=$item['phone_number']?>">
    <br>
    IMG
    <input type="text" name="img" value="<?=$item['img']?>">
    <br>
    <button type="submit">Update</button>
  </form>
</body>

</html>
