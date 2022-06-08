<html>
  <head>
    <meta charset="UTF-8">
    <title>PHPテスト</title>
    <meta name="description" content="このページの概要を書く">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
<?php
$flug = 0;

if(!empty($_POST['submit'])){
  $flug = 1;	
  session_start();
  $_SESSION['page'] = true;

}elseif(!empty($_POST['submit1'])){
  session_start();
  if(!isset($_SESSION['count'])){  
    if(!empty($_SESSION['page'])){
      unset($_SESSION['page']);
      $flug = 2;	
    }else{
      session_destroy();
      $flug = 0;
    }
  }else{
    echo "Invalid operation";
  }
  $count++;
  $_SESSION['count'] = $count;
}

?>

  <?php if($flug == 2):?>
  <form action="" method="post">
    <h1>Hello World</h1>
  </form>   
  <?php elseif($flug == 1):?>
  <form action="" method="post">
    <h3><?php echo $_POST['text'];?></h3>
    <input type="submit" value="submit" name="submit1">
  </form>
  <?php else:?>
  <form action="" method="post">
    <input type="text" name="text" id="" placeholder="input here">
    <input type="submit" value="submit" name="submit">
  </form>
  <?php endif;?>
  </body>
</html>