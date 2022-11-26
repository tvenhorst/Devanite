<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once "../vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions
  //Server settings
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'mail.xendd.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'test@xendd.com';          //SMTP username
  $mail->Password   = 'vF0mRw3_HWYY';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
  $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
  
  //Recipients
  $mail->setFrom('test@xendd.com', 'Thomas van Xendd');
  $mail->addAddress("{$_POST['email']}", "{$_POST['name']}");     //Add a recipient

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = "Thomas, {$_POST['name']} heeft via de site een bericht gestuurd:";
  $mail->Body    = "<strong>{$_POST['subject']}</strong><br>
                    {$_POST['message']}
  ";

  $mail->send();

  return json_decode('Bericht succesvol gestuurd!');