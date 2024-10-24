<?php
if(isset($_SESSION['id_user'])) {$id = $_SESSION['id_user'];
  require 'model/connect.php';
  $sql = "select * from client where id = '$id'";
  $result = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($result);
} else {
  header('location: index.php');
}

?>

<section class="profile">
  <div class="profile_header">
    <h1>Profile</h1>
  </div>
  <div class="profile_container">
    <div class="profile_info">
      <p>Full name: <?=$data['fullname']?></p>
    </div>
    <div class="profile_info">
      <p>Email: <?=$data['email']?></p>
    </div>
    <div class="profile_info">
      <p>User name: <?=$data['user_name']?></p>
    </div>
    <div class="profile_info">
      <p>Date of birth: <?=$data['date']?></p>
    </div>
    <div class="profile_info">
      <p>Address: <?=$data['address']?></p>
    </div>
    <div class="profile_info">
      <p>Phone number: <?=$data['phone_number']?></p>
    </div>
  </div>
  <div class="update_profile">
    <div class="update_profile_btn">
      <a href="index.php?page=update_profile">Edit Profile</a>
    </div>
    <div class="update_profile_btn">
      <a href="index.php?page=change_pwd">Change Password</a>
    </div>
  </div>
</section>
