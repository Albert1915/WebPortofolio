<?php
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