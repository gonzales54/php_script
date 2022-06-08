<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP Form Validation</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
    </head>
   
    <body>
  		<?php 
		$mode = 0;
		$value = "";
		if(!empty($_POST['submit'])){
			$mode=1;
		}elseif(!empty($_POST['last'])){
			$mode=2;
		}elseif(!empty($_POST["back"])){
			$mode=0;
		}
		?>

		<?php if($mode === 1):?>
	        <form class="w-50" style="margin:15% auto;" method="post" action="">
				<div class="mb-3 d-flex justify-content-around">
                	<label for="exampleInputEmail1" class="form-label">Your Name</label>
                	<p><?php echo $_POST['name'];?></p>
            	</div>
				<button type="submit" name="back" class="btn btn-primary" value="back">Go back</button>
				<button type="submit" name="last" class="btn btn-primary" value="last">Submit</button>			
				<input type="hidden" name="name" value="<?php if(!empty($_POST['name'])){echo $_POST['name'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			</form>

		<?php elseif($mode === 2):?>
			<h2>Successful</h2>

		<?php else:?>
	        <form class="w-50" style="margin:15% auto;" method="post" action="">
				<div class="mb-3">
                	<label for="exampleInputEmail1" class="form-label">Your Name</label>
                	<input type="text" name="name" value="<?php if(!empty($_POST['name'])){echo $_POST['name'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            	</div>
            	<button type="submit" name="submit" class="btn btn-primary" value="submit">next</button>
       	 	</form>

		<?php endif;?>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>