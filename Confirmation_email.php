<?php

$Name = $name;
$Email = $emailad;
$subject = "This is a confirmation Mail";

$message = "Registration for caution money was successful and your responce is been recorded.";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Exception.php";

function con_mail(){
    
}
$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "abc@gmail.com"; //------------------- enter official mail here
$mail->Password = "abc"; //----------------------------- enter password here

$mail->addAddress($Email, $Name);

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();
?>
