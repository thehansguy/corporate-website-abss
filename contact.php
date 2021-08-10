<?php

    $message_sent=false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if( filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ){

            // submit the form
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $to = "dev@simpliexpand.com";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";


            $headers = "From: webmaster@simpliexpand.com";


            mail($to, $messageSubject, $body, $headers);
            $message_sent= true;

        }
        else{
            $message_sent = false;
        }
        


    }

   

?>

<?php
    include "./includes/head-contact.php";
    include "./includes/nav.php";
?>

<!-- Sections -->


<!-- Contact Section 1-->
<div class="contact-section-1">
    <div class="contact-section-1__left">
        <h1 class="h-page-heading">Contact us</h1>
        
        <p>Location: Westland Mumbai Junction</p>
<p>Working Hours: 8am to 5pm</p>
<p>Phone: 0244741350</p>

<hr>
    </div>
    <div class="contact-section-1__right">
            <?php
            if($message_sent):
            ?>
                <h3>Thanks, we'll be in touch</h3>
            <?php
            else:
            ?>

            <div class="contact-container">
                <form action="index.php" method="POST" class="form">
                    <div class="form-group first-name">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="FIRST NAME" tabindex="1" required>
                    
                        
                    
                    </div>
                    <div class="form-group last-name">
                        <label for="name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="LAST NAME" tabindex="1" required>
                       </div>
                    
                    <div class="form-group phone">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="PHONE" tabindex="2" required>
                    </div>

                    <div class="form-group email">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" tabindex="2" required>
                    </div>
                 
                    <div class="text-area frm-message">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="10" cols="50" id="message" name="message" placeholder="MESSAGE" tabindex="4"></textarea>
                    </div>
                    <div class="frm-submit">
                        <button type="submit" class="contact-btn">SUBMIT</button>
                    </div>
                </form>
            </div>
            <?php
            endif;
            ?>

    </div>
    
</div>



<?php
    include "./includes/js_scripts.php";
    include "./includes/footer.php";
?>
  