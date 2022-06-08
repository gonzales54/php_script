<html>
  <head>
    <meta charset="UTF-8">
    <title>PHPテスト</title>
    <meta name="description" content="このページの概要を書く">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
<?php
session_start();
if(isset($_SESSION['count'])){
	$count = $_SESSION['count'];
	
}else{
	$count = 0;
  session_destroy();
}

echo $count;
$count++;
$_SESSION['count'] = $count;
?>

  </body>
</html>