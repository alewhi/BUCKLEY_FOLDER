<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "buckleycc7@gmail.com";
$mail->Password = "mqrq kobh kfav agrz";

$mail->setFrom($email, $name);
$mail->addAddress("buckleycc7@gmail.com", "Dave");

$mail->Subject = $subject;
$mail->Body = "Sender's Name: $name\nSender's Email: $email\n\n$message";

$mail->send();

echo 'Message has been sent';




