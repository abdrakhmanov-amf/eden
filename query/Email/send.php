<?php 
$to .= "erzhigit1407@gmail.com>"; 

$subject = "Заголовок письма"; 

$message = ' <p>Текст письма</p> </br> <b>1-ая строчка </b> </br><i>2-ая строчка </i> </br>';

$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: От кого письмо <Eden@anticorruption.kz>\r\n"; 
$headers .= "Reply-To: Eden@anticorruption.kz\r\n"; 

mail($to, $subject, $message, $headers); 
?>