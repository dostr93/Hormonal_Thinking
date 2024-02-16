<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/SMTP.php';

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$mail = new PHPMailer(true);

$name = $data['name'];
$email = $data['email'];
$message = $data['message'];

$title = 'Заявка с сайта';

try {
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false;
    $mail->Port = 587;
    $mail->Username = 'powerenergy@hormonalthinking.com';
    $mail->Password = 'uc7terbEK=A9';

    //Recipients
    $mail->setFrom('powerenergy@hormonalthinking.com', 'Заявка с сайта Hormanalthinking.com');
    $mail->addAddress('powerenergy@hormonalthinking.com');     //Add a recipient
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->CharSet = 'UTF-8';
    $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

    $mail->send();
    echo ('Сообщение успешно отправленно!');
} catch (Exception $e) {
    echo ("Ошибка, сообщение не было отправленно!: {$mail->ErrorInfo}");
}

?>
