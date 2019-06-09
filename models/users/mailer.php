<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../../vendor/autoload.php';

require '../../vendor/phpmailer/phpmailer/src/Exception.php';
require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../vendor/phpmailer/phpmailer/src/SMTP.php';

$kome = $_POST['email'];

$mail = new PHPMailer(true);                            // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'auditorne.php@gmail.com';                 // SMTP username
    $mail->Password = 'Sifra123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('auditorne.php@gmail.com', 'Auditorne Contact Form');
    $mail->addAddress('milutin.velisic.195.17@ict.edu.rs');     // Add a recipient               // Name is optional
    $mail->addReplyTo($kome, 'Information');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Blockbuster';
    $mail->Body = "This message is sent so i can fulfill my obligation towards Danijela Nikitin's website requirements!";

    $mail->send();
    http_response_code(200);
    echo json_encode(true);
    //    echo 'Message has been sent';
    return true;
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    http_response_code(400);
    return false;
}
