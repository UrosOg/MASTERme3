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
$mail->Username = 'tvojgmail@gmail.com';
$mail->Password = 'iiln jfds abqq orey';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('tvojgmail@gmail.com', 'Website Contact');
$mail->addAddress('tvojgmail@gmail.com');

$mail->Subject = 'Nova poruka sa sajta';

$mail->Body = "
Ime: $name

Email: $email

Poruka:
$message
";

$mail->send();

echo "Poruka je uspešno poslata!";

} catch (Exception $e) {

echo "Greška: {$mail->ErrorInfo}";

}

?>