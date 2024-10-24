<?php
if(isset($_SESSION['id_user'])) {
  $id = $_SESSION['id_user'];
  
} else {
  header('location: index.php');
}

?>

<form class="profile" action="change_pwd_process.php" method="post">
  <div class="profile_header">
    <h1>Change Password</h1>
  </div>
  <div class="change_pwd_container">
    <div class="input_container">
      <p id="text">Current Password</p>
      <input type="text" name="current_pwd" required></input>
    </div>
    <?php
    if(isset($_GET['error'])) {
      echo '<span class="text_errorr">Wrong Current Password</span>';
    }
    ?>
    <div class="input_container">
      <p id="text">New password</p>
      <input id="new_pwd" type="text" name="new_pwd" required></input>
    </div>
    <div class="input_container">
      <p id="text">Confirm password</p>
      <input id="confirm_pwd" type="text" name="confirm_pwd" required></input>
    </div>
  </div>
  <span id="pwd_error" class="text_errorr"></span>
  <div class="update_profile">
    <button type="submit" name="submit" onclick="return check_pwd()">
      <p>Save</p>
    </button>
  </div>
</form>
