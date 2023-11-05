<?php

use PHPMailer\PHPMailer\PHPMailer;

require('./vendor/autoload.php');

function mailfunction($mail_reciever_email, $mail_reciever_name, $mail_msg, $attachment = false)
{

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'bwebcreations@gmail.com'; 
    $mail->Password = 'bybeadubjjtqcuad '; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587; 

    $mail->setFrom('bwebcreations@gmail.com', $mail_reciever_name);
    $mail->addAddress('bwebcreations@gmail.com', $mail_reciever_email);
    $mail->isHTML(true); 


    $mail->Subject = 'Neue Anfrage';
    $mail->Body = $mail_msg;

    $mail->From = 'bwebcreations@gmail.com';

    if ($mail->send()) {
        return true; 
    } else {
        // echo 'Die E-Mail konnte nicht gesendet werden. Fehler: ' . $mail->ErrorInfo;
        return false;
    }
}

?>