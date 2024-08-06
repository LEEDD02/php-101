<?php
$username=htmlspecialchars($_POST['username']);
$password=htmlspecialchars($_POST['password']);
$email=htmlspecialchars($_POST['email']);
echo 'Name:'.$username.'<br/>';
echo 'Password:'.$password.'<br/>';
echo 'Email:'.$email.'<br/>';
?>
