<?php
require_once("function.php");
session_start();

$_SESSION['token'] = get_csrf_token();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input, button{
        display: block;
    }
    </style>
</head>
<body>
    <form action="register_check.php" method="post">
        <input type="text" name="name" id="" value="<?php echo $_SESSION['name'];?>" placeholder="Input Your Name">
        <input type="email" name="email" id="" value="<?php echo $_SESSION['email'];?>" placeholder="Input Your Email">
        <button type="submit" name="confirm" value="submit">confirm</button>
    </form>
    <p style="color: red; font-size:14px;"><?php echo $_SESSION['err'];?></p>
    <?php
    unset($_SESSION['err']);
    ?>
</body>
</html>