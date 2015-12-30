<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_body = <<<BODY
Name $name
Email $email
Subject $subject
Message $message
BODY;

mail ("mrmonkey82@gmail.com", "Query from Photography Website", $email_body);

$_SESSION['confirmation'] = "Your message has been sent, thank you!";

header('Location: contact.php');
?>
