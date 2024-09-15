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
  $data = mysqli_query($conn,$sql);
  
?>
  <form action="process_insert.php" method="post">
    Product Name
    <input type="text" name="product_name" id="">
    <br>
    Price
    <input type="text" name="price">
    <br>
    Img
    <input type="file" name="img">
    <br>
    Type
    <input type="text" name="type">
    <br>
    Manufacture
    <select name="manufactures">
      <?php foreach($data as $item) { ?>
      <option value="<?=$item['id'] ?>"><?=$item['brand_name'] ?></option>
      <?php } ?>
    </select>
    <br>
    <button type="submit">Add</button>
  </form>
</body>

</html>
