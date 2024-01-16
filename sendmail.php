<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Load Composer's autoloader
// require_once 'C:\xampp\phpMyAdmin\vendor\autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['submit'])) {

    $email = $_POST['email']; //Mendapatkan inputan email dari form
    $message = $_POST['message']; //Mendapatkan inputan nama dari form

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'example@gmail.com';
        $mail->Password   = 'password';
        $mail->SMTPSecure = 'tls';
        // $mail->SMTPAutoTLS = false; 
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom("$email", 'Contact Form');
        $mail->addAddress('okarioalbert@gmail.com');
        // $mail->addReplyTo('no-reply@gmail.com', 'NO Reply');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Website';
        $mail->Body    = "<h1>Content dari Form</h1> $message";
        $mail->AltBody = 'Data formulir';

        $mail->send();
        echo "Data dari Formulir HTML";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
else {
    echo "Silakan submit terlebih dahulu";
}

?>
