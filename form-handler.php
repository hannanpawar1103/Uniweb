<?php
$name= $_post['name']
$visitor_email= $_post['email']
$subject= $_post['sbject']
$message= $_post['message']

$email_from = 'eduford@gmail.com';

$email_subject = 'New Form Submission';

$email_body = 'User name :$name.\n'.
            'User email :$visitor_email.\n'.
            'User subject :$subject.\n'.
            'User message :$message.\n';


$to = 'hannanpawar1103@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location:contact.html");

?>