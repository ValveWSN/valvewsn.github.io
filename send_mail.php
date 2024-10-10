<?php

$to = "vwsn@support.com"; 


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = "New Contact Form Submission from " . $name;


$body = "You have received a new message from the contact form on your website.\n\n";
$body .= "Name: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Message: \n" . $message . "\n";


$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";


if(mail($to, $subject, $body, $headers)) {

    echo "Message sent successfully!";
} else {

    echo "Message delivery failed.";
}
?>
