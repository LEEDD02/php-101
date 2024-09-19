<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  require '../model/connect.php';
  $sql = "select * from manufactures";
  $manufactures = mysqli_query($conn,$sql);
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql= "select * from product where id='$id'";
    $data = mysqli_query($conn,$sql);
    $product = mysqli_fetch_array($data);
  }
  
?>
  <form action="process_update.php" method="post">
    Product Name
    <input type="hidden" name="id" value="<?=$product['id'] ?>">
    <input type="text" name="product_name" id="" value="<?=$product['product_name'] ?>">
    <br>
    Price
    <input type="text" name="price" value="<?=$product['price'] ?>">
    <br>
    Img
    <input type="file" name="img" value="Error">
    <br>
    Type
    <input type="text" name="type" value="<?=$product['type'] ?>">
    <br>
    Manufacture
    <select name="manufactures">
      <?php foreach($manufactures as $item) { ?>
      <option value="<?=$item['id'] ?>" <?php if ($item['id']== $product['manufactures']) {?> selected <?php }?>>
        <?=$item['brand_name'] ?></option>
      <?php } ?>
    </select>
    <br>
    <button type="submit">Update</button>
  </form>
</body>

</html>
