<?php 
require 'model/connect.php';
$sql= "select * from product where type='ipad'";
$result = mysqli_query($conn, $sql);
?>
<section class="product_sect">
  <div class="product_list_container" id="product_list_container">
    <ul class="product_list">
      <?php foreach($result as $item){?>
      <li class="product_container">
        <div class="hot">
          <p>HOT</p>
        </div>
        <div class="product_img_container">
          <img src="img/iphone-11-pro-max-vang.jpg.webp" alt="">
        </div>
        <h3><a href=""><?php echo $item['product_name']?></a></h3>
        <h4><?php echo $item['price']?>$</h4>
        <button><a href="">Purchase</a></button>
      </li>
      <?php } ?>
    </ul>

  </div>
  <button class="extension" onclick="extension()" id="extension">More...</button>


</section>
