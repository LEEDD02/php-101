<?php
session_start();
ob_start();

$_SESSION['user']=
    [
    'username'=>'dang',
    'password'=>'123',
    'email'=>'dang@gmail.com'
    ];

echo $_SESSION['user']['username'].'<br/>';
echo $_SESSION['user']['password'].'<br/>';
?>
