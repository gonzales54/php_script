<?php
define('DNS','');
define('USER_NAME', '');
define('PASSWORD', '');
define('SENDER_EMAIL', '');

function get_pdo_options() {
  return array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
      PDO::ATTR_EMULATE_PREPARES => false
    );
}

function get_csrf_token() {
    $token_legth = 16;
    $bytes = openssl_random_pseudo_bytes($token_legth);
    return bin2hex($bytes);
}

function redirect_to_welcome(){
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: welcome.php');
    exit();
}

function redirect_to_register(){
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: register.php');
    exit();
}

function redirect_to_confirm(){
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: confirm.php');
    exit();
}

function redirect_to_submit(){
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: submit.php');
    exit();
}