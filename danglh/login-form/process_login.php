<?php
  if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $password = $_POST['password'];

    if (($_SESSION['user']['username'] == $user) && ($_SESSION['user']['password'] == $password)) {
      $_SESSION['right-account'] = $_SESSION['user']['username'];
      header('location: index.php');
    } else {
      echo '<p>Account does not exist or Wrong password</p>';
    }
  }
?>
