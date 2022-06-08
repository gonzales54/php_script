<?php
require_once("function.php");
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?=$_SESSION['url'];?>"><?=$_SESSION['url'];?></a> 
    <?php
    $_SESSION = array();
    session_destroy();
    ?>  
</body>
</html>