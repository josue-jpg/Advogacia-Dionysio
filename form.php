<?php

$name = $_POST['name'];
$visitor_email = $POST['email'];
$message = $POST['message'];

$email_from = 'wellingtonkennedy3013@gmail.com';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message.\n";

$to = 'avinash6252@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_body,$headers);

header("Location: index.html");

?>