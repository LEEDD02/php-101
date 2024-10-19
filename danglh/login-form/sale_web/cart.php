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
  <?php if (!empty($cart)) {
    require 'model/connect.php';
    $id = $_SESSION['id_user'];
    $sql = "select * from client where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    echo '
  <form class="receiver_inf" action="process_pay.php" method="post">
    <input type="text" name="fullname" value="'.$data['fullname'].'">
  <input type="number" name="phone_number" value="'.$data['phone_number'].'">
  <input type="text" name="address" value="'.$data['address'].'">
  <button class="pay" name="pay_btn">Pay</button>
  </form>';
  } ?>


</section>
