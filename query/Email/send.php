<?php
require_once('SMTP.php');
require_once('PHPMailer.php');
require_once('Exception.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

$mail=new PHPMailer(true); // Passing `true` enables exceptions

        try {
            //settings
            $mail->SMTPDebug=2; // Enable verbose debug output
            $mail->isSMTP(); // Set mailer to use SMTP
            $mail->Host='localhost';
            $mail->SMTPAuth=true; // Enable SMTP authentication
            $mail->Username='edennewssite@gmail.com'; // SMTP username
            $mail->Password='testeden37'; // SMTP password
            $mail->SMTPSecure='ssl';
            $mail->Port=25;
            $mail->setFrom('edennewssite@gmail.com', 'Eden');

            //recipient
            $mail->addAddress('erjigit1407@gmail.com', 'optional recipient name');     // Add a recipient

            //content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject='Hello User';
            $mail->Body='description';
            $mail->AltBody='This is the body in plain text for non-HTML mail clients';
            $mail->send();

            echo 'Message has been sent';

        } 
        catch(Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: '.$mail->ErrorInfo;
        }


?>





