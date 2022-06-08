

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l") . "<br>";
    ?>
    <p><?php echo "The time is " . date("h:i:sa");?></p>
	<p>
        <?php 
            $d = strtotime("10:30pm April 15 2022");
            echo "Date is " . date("Y-m-d h:i:sa", $d);
        ?>
    </p>

    <p>&copy; 2010-<?php echo date("Y");?></p>
</body>
</html>