<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website1</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="scrollTo( 0, <?php if(!empty($_POST['hidden'])){echo $_POST['hidden'];}else{echo "0";} ?> )">
    <header class="header">
        <div class="wrapper">
            <h1 class="title"><a href="#">Website1</a></h1>
            <nav>
                <ul>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>