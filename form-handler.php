<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = 'tsukysaur@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location: support.html");

?>