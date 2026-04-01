<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

$mail = new PHPMailer(true);

try {

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'masterme26122025@gmail.com';
$mail->Password = 'lawp ehqk kwfc rijp';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('masterme26122025@gmail.com', 'Website Contact');
$mail->addAddress('masterme26122025@gmail.com');

$mail->Subject = 'Nova poruka sa sajta';

$mail->Body = "
Ime: $name

Email: $email

Poruka:
$message
";

$mail->send();

echo '<script>alert("Your message has been sent successfully!"); window.location="index.html#contact1";</script>';

} catch (Exception $e) {

echo '<script>alert("Error: Your message was not sent!"); window.location="index.html#contact1";</script>';

}


?>


