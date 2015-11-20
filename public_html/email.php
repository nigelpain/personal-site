<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_body = <<<BODY
Name $name
Email $email
Message $message
BODY;

mail ("mrmonkey82@gmail.com", "Query from Photography Website", $email_body);

$_SESSION['confirmation'] = "Your message has been sent! Thank you";

header('Location: contact.php');
?>
