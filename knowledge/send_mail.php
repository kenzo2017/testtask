<?php
$MailTo = $_POST['email'];
$MailSub = $_POST['subject'];
$MailMsg = $_POST['message'];
require("C:\xampp\htdocs\knowledge\PHPMailer-master\src\PHPMailer.php\pear");
require("C:\xampp\htdocs\knowledge\PHPMailer-master\src\SMTP.php");

$mail = new PHPMailer;
$mail ->IsSmtp();
$mail ->SMTPDebug = 0;
$mail ->SMTPAuth = true;
$mail ->SMTPSecure ='tls';
$mail ->Host ="smtp.gmail.com";
$mail ->Port = 587; //or 587
$mail ->IsHTML(false);
$mail ->Username = "mustardseed19@gmail.com";
$mail ->Password ="";
$mail ->SetFrom("mustardseed19@gmail.com");
$mail ->Subject = $MailSub;
$mail ->Body = $MailMsg;
$mail ->AddAddress($MailTo);

if(!$mail->Send()){
    echo "Mail not sent";
}
else
{
    echo "Mail sent";
}
?>