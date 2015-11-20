<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mail ("mrmonkey82@gmail.com", "Website Test", $message);
?>
