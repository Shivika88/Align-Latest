<?php 
$ToEmail = 'aligndentalclinic1@gmail.com,nehabhardwaz.gtl@gmail.com'; 
$EmailSubject = 'Footer contact form'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["firstName"].""; 
$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
$MESSAGE_BODY .= "Subject: ".$_POST["subject"]."";
$MESSAGE_BODY .= "Question: ".nl2br($_POST["question"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
header("Location: thankyou.html"); 
exit;
?>
