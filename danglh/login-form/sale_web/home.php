<?php 
require 'model/connect.php';
$sql = "select * from product";
$result = mysqli_query($conn, $sql);
$total_number_page = mysqli_num_rows($result);
$item_per_page = 5;
if (isset($_GET['trang'])) {
  $current_page = $_GET['trang'];
} else {$current_page = 1;}
$offset = ($current_page - 1) * $item_per_page;
$sql= "select * from product limit ".$item_per_page." offset ".$offset."";
$result = mysqli_query($conn, $sql);
$number_page = ceil($total_number_page/$item_per_page);

?>
<section class="product_sect">
  <div class="product_list_container" id="product_list_container">
    <ul class="product_list">
      <?php foreach($result as $item){?>
      <li class="product_container">
        <div class="product_img_container">
          <img src="img/iphone-11-pro-max-vang.jpg.webp" alt="">
        </div>
        <h3><a href="index.php?page=product_detail&&id=<?=$item['id']?>"><?=$item['product_name']?></a></h3>
        <h4><?php echo $item['price']?>$</h4>
        <button><a href="index.php?page=product_detail&&id=<?=$item['id']?>">Purchase</a></button>
      </li>
      <?php } ?>
    </ul>

  </div>
  <div class="page-number-container">
    <?php for ($i=1; $i<=$number_page; $i++) { if($i == $current_page) {?>
    <a style="color: red;" class="page-number" href="?trang=<?=$i?>"><?=$i?></a>
    <?php } else { ?>
    <a class="page-number" href="?trang=<?=$i?>"><?=$i?></a>
    <?php }}?>
  </div>

</section>
