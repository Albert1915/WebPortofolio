<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $message = "Pengirim: " . $email ."\r\n"
                . "Pesan: " .$message;

    if( isset($_POST['submit'])){
        $email = $_POST['email'];
        $message = $_POST['message'];

        die( $email .' '. $message);

        if( mail($email, $message) ){
            echo "Email berhasil dikirim";
        }
        else {
            echo "Email gagal dikirim";
        }
    }
?>