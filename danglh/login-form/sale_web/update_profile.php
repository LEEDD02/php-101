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

<form class="profile" action="update_profile_process.php" method="post">
  <div class="profile_header">
    <h1>Profile</h1>
  </div>
  <div class="form_container">
    <input type="text" name="fullname" value="<?=$data['fullname']?>"></input>
    <input type="text" name="email" value="<?=$data['email']?>"></input>
    <input type="text" name="user_name" value="<?=$data['user_name']?>">
    </input>
    <input type="text" name="date" value="<?=$data['date']?>">
    </input>
    <input type="text" name="address" value="<?=$data['address']?>">
    </input>
    <input type="text" name="phone_number" value="<?=$data['phone_number']?>">
    </input>
  </div>
  <div class="update_profile">
    <button type="submit" name="submit">
      <p>Save</p>
    </button>
  </div>
</form>
