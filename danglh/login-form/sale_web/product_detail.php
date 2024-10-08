<?php 
require 'model/connect.php';
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "select * from product where id = '$id'";
  $result = mysqli_query($conn,$sql);
  $data = mysqli_fetch_array($result);
  $type = $data['type'];
  $sql = "select * from product where type = '$type' limit 2";
  $similar_product= mysqli_query($conn,$sql);
}
?>
<section class="product_detail">
  <div class="product_header">
    <div class="product_name">
      <h2><?=$data['product_name']?></h2>
    </div>
    <div class="product_rating">
      <p>Rating</p>
    </div>

  </div>
  <div class="product_main">
    <div class="product_img">
      <img src="img/ipad-10-2-inch-vang.jpg.webp" alt="">
    </div>
    <div class="product_information">
      <h4><?=$data['price']?>$</h4>
      <p>Color</p>
      <p>Guarantee: 12 Months <a href="">(Detail)</a></p>
      <div class="product_Specifications">
        <h2>Specifications</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum officiis quis quas culpa qui ab aliquam, quia
          suscipit, libero saepe commodi excepturi sit molestias sint totam omnis iusto. Officia, consequatur.</p>
      </div>
    </div>

    <div class="similar-product">
      <div class="similar-product_header">
        <h1>Similar Products</h1>
      </div>
      <?php foreach ($similar_product as $item) {?>
      <div class="similar-product_container">
        <div class="similar-product_img">
          <img src="img/ipad-air-3.jpg.webp" alt="">
        </div>
        <div class="similar-product_content">
          <h2><?=$item['product_name']?></h2>
          <h3><?=$item['price']?>$</h3>
          <p><a href="">detail</a></p>
        </div>
      </div>
      <?php } ?>
    </div>


  </div>
</section>
