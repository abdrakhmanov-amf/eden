<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try {
$mail->isSMTP();// Set mailer to use SMTP
$mail->CharSet = "utf-8";// set charset to utf8
$mail->SMTPAuth = false;// Enable SMTP authentication
$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted

$mail->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
$mail->Port = 465;// TCP port to connect to
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isHTML(true);// Set email format to HTML

$mail->Username = 'edennewssite@gmail.com';// SMTP username
$mail->Password = 'testeden37';// SMTP password

$mail->setFrom('erjigit1407@gmail.com', 'hjbhqedqd');//Your application NAME and EMAIL
$mail->Subject = 'Test';//Message subject
$mail->MsgHTML('HTML code');// Message body
$mail->addAddress('edennewssite@gmail.com', 'User Name');// Target email


$mail->send();
}
        catch(Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: '.$mail->ErrorInfo;
        }

// $mail=new PHPMailer(true); // Passing `true` enables exceptions

//         try {
//             //settings
//             $mail->SMTPDebug=2; // Enable verbose debug output
//             $mail->isSMTP(); // Set mailer to use SMTP
//             $mail->Host='smtp.gmail.com';
//             $mail->SMTPAuth=false; // Enable SMTP authentication
//             $mail->Username='edennewssite@gmail.com'; // SMTP username
//             $mail->Password='testeden37'; // SMTP password
//             $mail->SMTPSecure='ssl';
//             $mail->Port=465;
//             $mail->setFrom('edennewssite@gmail.com', 'Eden');

//             //recipient
//             $mail->addAddress('erjigit1407@gmail.com', 'optional recipient name');     // Add a recipient

//             //content
//             $mail->isHTML(true); // Set email format to HTML
//             $mail->Subject='Hello User';
//             $mail->Body='description';
//             $mail->AltBody='This is the body in plain text for non-HTML mail clients';
//             $mail->send();

//             echo 'Message has been sent';

//         } 
//         catch(Exception $e) {
//             echo 'Message could not be sent.';
//             echo 'Mailer Error: '.$mail->ErrorInfo;
//         }


?>





