<?php

use PHPMailer\PHPMailer\PHPMailer;

require('./vendor/autoload.php');

// Konfigurieren Sie die PHPMailer-Instanz
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // SMTP-Server für Gmail
$mail->SMTPAuth = true;
$mail->Username = 'bwebcreations@gmail.com'; // Ihre Gmail-E-Mail-Adresse
$mail->Password = 'jFwFeJN6j8rpNWcm'; // Ihr Gmail-Passwort
$mail->SMTPSecure = 'tls'; // TLS-Verschlüsselung
$mail->Port = 587; // Port für TLS

$mail->setFrom('bwebcreations@gmail.com', 'Dein Name');
$mail->addAddress('bwebcreations@gmail.com', 'Empfänger Name');
$mail->isHTML(true);  // E-Mail im HTML-Format

$mail->Subject = 'Betreff der E-Mail';
$mail->Body    = 'Inhalt der E-Mail';

// E-Mail senden
if ($mail->send()) {
    echo 'Die E-Mail wurde erfolgreich gesendet.';
} else {
    echo 'Die E-Mail konnte nicht gesendet werden. Fehler: ' . $mail->ErrorInfo;
}
?>
