<?php
session_start();
$email='vhevan@gmail.com';
$username='Victor';
$password='1234';

if ($_GET['email']==$email and $_GET['password']==$password){
    $_SESSION["username"]=$username;
    echo "Bienvenido " .$_SESSION["username"];
    header('location:index.php');
    
}else{
    header('location:index.php?m=1');
}
?>