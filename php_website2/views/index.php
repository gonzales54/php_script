<?php include "header.php";?>
<main>
    <section class="mainvisual">
        <div>
            <h2 class="section-title">Lorem ipsum dolor sit</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ex nisi, molestie eget sagittis non, tempor a quam. Duis
            fringilla fermentum diam a faucibus.</p>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <h2 class="section-title">Gallery</h2>
        <div class="tile">
            <div class="item"><img src="img/mountain.png" alt=""></div>
            <div class="item"><img src="img/mountain.png" alt=""></div>
            <div class="item"><img src="img/mountain.png" alt=""></div>
            <div class="item"><img src="img/mountain.png" alt=""></div>
            <div class="item"><img src="img/mountain.png" alt=""></div>
            <div class="item"><img src="img/mountain.png" alt=""></div>
        </div>
    </section>
    <?php 
    $flug = 0;
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
        session_start();
        $_SESSION['page'] = true;
        if(!empty($_POST['confirm'])){
            if(!empty($_POST['name'] && $_POST['email'] && $_POST['text'])){
                $_SESSION["name"]=check($_POST['name']);	
                $_SESSION["email"]=check($_POST['email']);	
                $_SESSION["text"]=check($_POST['text']);	
                $_SESSION['scroll'] = $_POST['hidden'];
                $flug = 1;
            }        
        }elseif(!empty($_POST['back'])){
            $flug = 0;
        }elseif(!empty($_POST['submit'])){
            if($_SESSION['page'] == true){
                session_start();
                $flug = 2;
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
                session_destroy();
            }else{
                $flug = 0;
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
    
    <section class="contact" id="contact">
        <h2 class="section-title">Contact</h2>
        <?php if($flug == 2):?>
            <h3 class="result">Sent Successfully</h3>
            <h3 class="result" style="font-size: 18px;"><?echo $msg;?></h3>

        <?php elseif($flug == 1):?>
        <form action="" method="post" id="form">
            <label for="">Your Name</label>
            <h3><?php if(!empty($_POST['name'])){echo $_SESSION["name"];}?></h3>
            <label for="">Your E-mail</label>
            <h3><?php if(!empty($_POST['email'])){echo $_SESSION["email"];}?></h3>
            <label for="">Your Message</label>
            <p><?php if(!empty($_POST['text'])){echo $_SESSION["text"];}?></p>
            <div class="btns">
                <button type="submit" name="back" class="btn1" value="back" id="back">Back</button>
                <button type="submit" name="submit" class="btn2" value="submit" id="submit">Submit</button>
            </div>
			<input type="hidden" value="" class="hidden" name="hidden">
        </form>

        <?php else:?>
        <form action="" method="post" id="form">
            <label for="">Your Name</label>
            <input type="text" name="name" value="<?php if(!empty($_SESSION["name"])){echo $_SESSION["name"];}?>" required>
            <label for="">Your E-mail</label>
            <input type="email" name="email" value="<?php if(!empty($_SESSION["email"])){echo $_SESSION["email"];}?>" required>
            <label for="">Your Message</label>
            <textarea name="text" id="" cols="30" rows="10"  value="" required><?php if(!empty($_SESSION["text"])){echo $_SESSION["text"];}?></textarea>
            <button type="submit" name="confirm" class="btn" value="confirm" id="confirm">Confirm</button>
			<input type="hidden" value="" class="hidden" name="hidden">
        </form>

        <?php endif;?>
    </section>
</main>
<?php include "footer.php";?>