<?php
require 'mailer_latest/credential.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer_latest/vendor/autoload.php';

if(isset($_POST['sendClearance'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
header("location:index.php");
ob_start();
$mail = new PHPMailer(true);
try {
    //Server settings 
    $mail->CharSet = "utf-8";                                 //Send using SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = UNAME;                                  //SMTP username
    $mail->Password   = PW;                                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom(UNAME, 'Mailer');
    $mail->addAddress('crstblphlp@gmail.com');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Portfolio Message';
    $mail->Body   = 'From: '. $name . '<br><br>'
                    . $message .'';
                    $mail->send();
            
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
ob_end_clean();
}
?>