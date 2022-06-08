<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website1</title>
    <link rel="stylesheet" href="./scss/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./scss/style.css">

</head>
<body>
	<?php
		$flug = 0;
		$name = $email = $gender = $remember = $submit = "";
        $name_err = $email_err = $gender_err = "";

		if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST['Confirmation'])){
                if(isset($_POST['remember'])){
                    if(!empty($_POST['uname'])){
                        $name = check($_POST['uname']);
                    }else{
                        $name_err = "Invalid email format";
                    }
                    if(!empty($_POST['email'])){
                        $email = check($_POST['email']);
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $email_err = "<script type='text/javascript'>alert('Invalid email format');</script>";
                            echo $email_err;
                        }
                    }
                    if(!empty($_POST['gender'])){
                        $gender = check($_POST['gender']);
                    }
                }
                $flug = 1;
                session_start();
                $_SESSION['page'] = true;
            }elseif(isset($_POST['back'])){
                $flug = 0;
            }elseif(isset($_POST['submit'])){
                $flug = 2;
				unset($_SESSION['page']);
                mb_language("Japanese");
                mb_internal_encoding("UTF-8");

                $to = "hi15.masa.05@gmail.com";
                $subject = 'title';
                $message = "This is Test Mail\r\n How are you?";
                $headers = "From: example@php-sql-practice.online";

                if(mb_send_mail($to, $subject, $message, $headers)){
                    $msg = "Successful to send";
                }else{
                    $msg = "Unsuccessful to send"; 
                }
            }
		}
		function check($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
    <?php if($flug == 2):?>
        <h2><?php echo $msg;?></h2>


    <?php elseif($flug == 1):?>
        <div class="w-100">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" class="w-50 mx-auto was-validated" method="post">
                <h2 class="text-danger">Confirmation</h2>
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label">Your Name:</label>
                    <h4><?php echo $name;?></h4>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Your E-mail:</label>
                    <h4><?php echo $email;?></h4>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <p class="control-label"><b>gender</b></p>
                    <div class="radio-inline">
                        <h4><?php echo $gender;?></h4>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-dark" name="back" value="back">back</button>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                </div>

                <input type="hidden" name="uname" value="<?php echo $_POST['uname'];?>">
                <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
                <input type="hidden" name="gender" value="<?php echo $_POST['gender'];?>">
            </form>
        </div>

    <?php else:?>
        <div class="w-100">
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" class="w-50 mx-auto was-validated" method="post">
                <div class="mb-3 mt-3">
                    <label for="uname" class="form-label">Your Name:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" value = "<?php if(!empty($_POST['uname'])){echo $_POST['uname'];}?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Your E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter password" name="email" value = "<?php if(!empty($_POST['email'])){echo $_POST['email'];}?>" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <p class="control-label"><b>gender</b></p>
                    <div class="radio-inline">
                        <input type="radio" value="male" name="gender" id="male" required <?php if(!empty($_POST['gender']) && $_POST['gender'] == "male"){echo 'checked';}?>>
                        <label for="man">male</label>
                        <input type="radio" value="female" name="gender" id="female" required <?php if(!empty($_POST['gender']) && $_POST['gender'] == "female"){echo 'checked';}?>>
                        <label for="woman">female</label>
                        <input type="radio" value="other" name="gender" id="other" required <?php if(!empty($_POST['gender']) && $_POST['gender'] == "other"){echo 'checked';}?>>
                        <label for="other">other</label>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required <?php if(!empty($_POST['remember'])){echo 'checked';}?>>
                    <label class="form-check-label" for="myCheck">I agree to send.</label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Check this checkbox to continue.</div>
                </div>
                
                <button type="submit" class="btn btn-primary" name="Confirmation" value="submit">Confirmation</button>
            </form>
        </div>
    <?php endif;?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>