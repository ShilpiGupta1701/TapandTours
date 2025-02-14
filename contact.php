
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - TapAndTours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <!-- Bootstrap 5 JS (Required for toggling navbar in mobile) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JS (Required for Navbar & Dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- header  -->
    <?php 
    include 'components/header.php';
    ?>

    <!-- contact form  -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- Left Section - Contact Info -->
            <div class="col-md-6 contact-info">
                <div class="info-box text-white text-center p-4">
                    <h4>📍 Address</h4>
                    <p>BSI Business Park,H-15,305,Noida-63,110901,Uttar Pradesh, India</p>
                    
                    <h4>📞 Let's Talk</h4>
                    <p class="phone">+1 800 1236879</p>

                    <h4>📧 General Support</h4>
                    <p class="email">contact@example.com</p>
                </div>
            </div>

            <!-- Right Section - Contact Form -->
            <div class="col-md-6 contact-form">
                <h2 class="text-center">Send Us A Message</h2>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">First Name *</label>
                            <input type="text" class="form-control" name="fname" placeholder="First name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Last Name *</label>
                            <input type="text" class="form-control" name="lname" placeholder="Last name">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Enter Your Email *</label>
                        <input type="email" class="form-control" name="email" placeholder="Eg. example@email.com">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Enter Phone Number</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Eg. +1 800 000000">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message *</label>
                        <textarea class="form-control" rows="4" name="msg"  placeholder="Write us a message"></textarea>
                    </div>

                    <button type="submit" name="send" class="btn btn-primary w-100">Send Message</button>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php 
    include 'components/footer.php';
    ?>
    <!-- Footer -->

</body>
</html>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    // $email = $_POST['email'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    

//Load Composer's autoloader
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'sg5903221@gmail.com';                     //SMTP username
    // $mail->Username   = ["NULL"];                     //SMTP username
    $mail->Password   = 'azlu ickg ldbr bcpu';                               //SMTP password
    // $mail->Password   = ["NULL"];                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('sg5903221@gmail.com', 'contact form');
    // $mail->setFrom($email, $fname . ' ' . $lname);
    $mail->addAddress('shilpigupta100194@gmail.com', 'Shilpi Gupta');     //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form';
    $mail->Body    = "Sender's name - $fname $lname <br> Sender's email - $email <br> Sender's phone - $phone <br> Message - $msg";
   

    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  
}

?>