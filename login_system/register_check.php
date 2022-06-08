<?php
require_once("function.php");
session_start();

$name = $_POST['name'];
$email = $_POST['email'];

if(empty($name) || empty($email)){
    $_SESSION['err'] = "未入力です";
    redirect_to_register();
}else{
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    redirect_to_confirm();
}