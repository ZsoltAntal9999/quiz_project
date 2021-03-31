<?php

$dir = realpath(__DIR__."/phpMailer/"); 
//echo "dir:".$dir;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require $dir.'\Exception.php';
require $dir.'\PHPMailer.php';
require $dir.'\SMTP.php';
$emailFrom="antzsooldalteszt01@gmail.com";
$PASS="Zsoltika1111";
//vagy:
//$emailFrom="kandoinformatika@gmail.com";
//$PASS="kando@teszt";
//$email=$to_email;
//$body="<p> ez egy teszt email -  áűáőúőúőúéóüö";

//$body.= "<a href=\"localhost/webshop/webshop.php"."\">Vissza a webshop oldalára</a><p>";     


$mail = new PHPMailer(true);         // Passing `true` enables exceptions
$mail->Encoding = 'base64';
$mail->CharSet = "UTF-8";

try {
  //Server settings
    
    $mail->isSMTP();                 // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;          // Enable SMTP authentication
    $mail->Username = $emailFrom;    // SMTP username
    $mail->Password = $PASS;       // SMTP password
    $mail->SMTPSecure = 'tls';       // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;               // TCP port to connect to
  //Recipients
    $mail->setFrom($emailFrom, 'Localhost');
    $mail->addAddress($email,'Localhost');     // Add a recipient
   //Content
    $mail->isHTML(true);                            // Set email format to HTML
    //$mail->Subject = 'megrendelés igazolása';
    $sub = '=?UTF-8?B?'.base64_encode('Új vélemény').'?=';
    $mail->Subject = $sub;
   
    $mail->Body    = $body;
    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
