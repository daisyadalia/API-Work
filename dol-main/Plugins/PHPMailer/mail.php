<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../vendor/autoload.php';  

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'daisy.amolloh@strathmore.edu';
    $mail->Password   = 'xxvw ezju glgy tugg ';  // app password, not Gmail login password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('daisy.amolloh@strathmore.edu', 'Daisy Adalia');
    $mail->addAddress('daisylexinne@gmail.com', 'Lexinne');

    $mail->isHTML(true);
    $mail->Subject = 'Greetings from DaisyTeam';
    $mail->Body    = 'Welcome to <b>DaisyTeams</b>! This is a new Careerpath of learning and growth.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
