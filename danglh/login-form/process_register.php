<!-- <?php
require_once 'model/connect.php';

try {
  if (isset($_POST['btn-submit'])) {
    echo '<pre>';
    print_r($_POST);
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "INSERT INTO user (fullname, username, password, email) VALUES ('$fullname', '$username', '$password', '$email')";
    
    echo $sql;

    $conn->exec($sql);
  }
} catch(PDOException $e) {
  echo $e->getMessage();
}?> -->
