<?php
use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['Application_no']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email= $_POST['email'];
    $Application_no = $_POST['Application_no'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer(true);

   // smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "email@gmail.com"; //replace via official email
    $mail->Password = "email.password"; //replace with password of official email
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;


    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress ("email@gmail.com");
    $mail->Subject = ;
    $mail->Body = $body;

    $sendSuccesfully = $mail->send();
    if($sendSuccesfully){
         $status = "success";
         $response = "Email is sent!";
    }
    else
        $status = "failed";
        $response = "Something is wrong: <br>"

}

?>
