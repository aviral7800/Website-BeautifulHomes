<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@beautifulhomes.com';

$email_subject = 'New form submission';

$email_body = "User name: $name.\n". 
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "Message: $message.\n";
              
              
$to = 'aviral.srivastava7800@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");

?>