<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'techlytical00@gmail.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";
$to = 'info.techlytical@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers)

header("Location: contact.html");

ini_set("mail.log", "mail.log");
ini_set("mail.add_x_header", TRUE);
?>