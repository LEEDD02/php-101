<?php
if (isset($_POST['register_submit'])) {
  $fullname= $_POST['fullname'];
  $username= $_POST['username'];
  $password= $_POST['password'];
  $email= $_POST['email'];
  $date= $_POST['date'];
  echo '<pre>';
  print_r($_POST);

  $hostname = "127.0.0.1";
  $username = "danglh";
  $password = "password";
  $dbname= 'demo_db';

  $conn = mysqli_connect($hostname, $username, $password, $dbname);

  $sql = "INSERT INTO client (fullname, username, password, email, date) 
  VALUES ('$fullname', '$username', '$password', '$email', '$date')";
  mysqli_query($conn, $sql);
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
