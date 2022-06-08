<!DOCTYPE html>
<html>
<body>

<?php
$str = "<h1>Hello World!</h1>";
$int = 100;
$int1 = 0;
$ip = "127.0.0.1";
$email_f = "d@c";
$email_f= filter_var($email_f, FILTER_SANITIZE_EMAIL);
$email = "kk18p552@gmail.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$url = "https://www.php-sql-practice.online/filter/index.php";
$url = filter_var($url, FILTER_SANITIZE_URL);

$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr . "<br>";
if(!filter_var($int, FILTER_VALIDATE_INT) == false){
    echo("$int is valid <br>");
}else{
    echo("$int is not valid <br>");
}
if(!filter_var($int1, FILTER_VALIDATE_INT) == 0 || !filter_var($int1, FILTER_VALIDATE_INT) == false){
    echo("$int1 is valid <br>");
}else{
    echo("$int1 is not valid <br>");
}
if(!filter_var($ip, FILTER_VALIDATE_IP) == false){
    echo("$ip is valid IP address <br>");
}else{
    echo("$ip is not valid IP address <br>");
}
if(!filter_var($email_f, FILTER_VALIDATE_EMAIL) == false){
    echo("$email_f is a valid email address <br>");
}else{
    echo("$email_f is not a valid email address <br>");
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL) == false){
    echo("$email is a valid email address <br>");
}else{
    echo("$email is not a valid email address <br>");
}
if(!filter_var($url, FILTER_VALIDATE_URL) == false){
    echo("$url is a valid URL <br>");
}else{
    echo("$url is not a valid URL <br>");
}

?>

</body>
</html>