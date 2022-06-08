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
    <style>
    input{
        display: block;
    }
    </style>
</head>
<body>
    <form action="" method="post">
        <p><?php echo $_SESSION['name'];?></p>
        <p><?php echo $_SESSION['email'];?></p>
        <button type="submit" name="back" value="back">Back</button>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <?php
    if(isset($_POST['back'])){
        redirect_to_register();
        
    }elseif(isset($_POST['submit'])){
        try{   
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
            $token = $_SESSION['token'];

            $pdo = new PDO(DNS, USER_NAME, PASSWORD);
            $query = "INSERT INTO pre_login(name, email, token) VALUES ('$name', '$email', '$token')";
            
            $mail = "SELECT email FROM pre_login";
            $stmtMail = $pdo -> query($mail);

            $cnt = 0;
            while ($row = $stmtMail->fetch()){
                if($row['email'] == $email){
                    $cnt = $cnt + 1;
                }
            }

            if($cnt > 0){
                redirect_to_register();
            }else{
                $stmt = $pdo->query($query);
                $_SESSION['url'] = "https://php-sql-practice.online/login_system/login.php?urltoken=" . $_SESSION['token'];
                redirect_to_submit();
            }

            $pdo = null;
            
        }catch(PDOException $e){
            echo $e->getMessage();
            exit;
        }  
    }
    ?>
</body>
</html>