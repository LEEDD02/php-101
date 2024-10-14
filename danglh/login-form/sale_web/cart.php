<?php
session_start();
ob_start();
$cart = $_SESSION['cart'];
?>
<section class="cart">
  <?php if (empty($cart)) {
    echo '<div class="empty_cart">
          <p>Empty Cart</p>
          </div>';
  } else {
    foreach ($cart as $id => $value) { ?>
      <div class="cart_container">
        <div class="cart_product">
          <div class="cart_product_img">
            <img src="img/ipad-10-2-inch-vang.jpg.webp" alt="">
          </div>
          <div class="cart_product_content">
            <p><?= $value['product_name'] ?></p>
            <h2><?= $value['price'] * $value['quantity'] ?></h2>
          </div>
        </div>
        <div class="cart_control">
          <div class="delete_cart">
            <a href="update_number_cart.php?id=<?= $id ?>&&action=delete">Delete</a>
          </div>
          <div class="control">
            <a href="update_number_cart.php?id=<?= $id ?>&&action=decrease">
              <div class="increase_btn">
                <p>-</p>
              </div>
            </a>
            <p class="quantity"><?= $value['quantity'] ?></p>
            <a href="update_number_cart.php?id=<?= $id ?>&&action=increase">
              <div class="increase_btn">
                <p>+</p>
              </div>
            </a>
          </div>
        </div>

      </div>
  <?php }
  } ?>

</section>
