<?php

 $email = $_POST["email"];
 $senha = $_POST["senha"];


 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 require 'PHPMailer-master/src/Exception.php';
 require 'PHPMailer-master/src/PHPMailer.php';
 require 'PHPMailer-master/src/SMTP.php';

 $mail  = new  PHPMailer();

 //Config

 $mail->Mailer = "smtp";
 $mail->isSMTP();
 $mail->CharSet  = 'UTF-8';
 $mail->SMTPAuth = true;
 $mail->SMTPDebug = 0;
 $mail->SMTPSecure = 'ssl';
 $mail->Host  = 'smtp.gmail.com';
 $mail->Port  = 465;

 $mail->Username = "songitos.sound";
 $mail->Password  = "Songit@s23";
 $mail->SetFrom('songitos.sound@gmail.com', 'Songuitos');
 $mail->Subject = "Token de acesso";

 $token = random_int(10000, 99999);

 $mail->msgHTML("Seu codigo de acesso");
 $mail->send();

?>