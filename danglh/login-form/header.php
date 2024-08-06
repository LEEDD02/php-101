<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoundOfEnglish</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header>

    <nav class="nav">
      <p><a href="index.php">Sound Of English</a></p>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="pro.php">About</a></li>
        <li><a href="pro.php">Pronunciation</a></li>
        <li><a href="vocabulary.php">Vocabulary</a></li>
        <li><a href="quiz.php">Quiz</a></li>
        <?php
        if(isset($_SESSION['right-account'])){
          echo '<li class="login-out"><a href="login.php" id="login-link">'.$_SESSION['user']['username'].'</a><div class="line"></div>
          <a href="logout.php" id="logout-link">Logout</a></li>';
        } else {
          echo '<li><a href="login.php" id="login-link">Login</a></li>';
        }
        ?>
        <!-- <li><a href="login.php" id="login-link">Login</a></li>
        <li><a href="#" id="logout-link" style="display:none;">Logout</a></li> -->
      </ul>
    </nav>

  </header>


</body>

</html>
