<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$contents = "<p>Bedrijfsnaam: $name</p>";
$contents .= "<p>Email: $email</p>";
$contents .= "<p>Telefoonnummer: $phone</p>";
$contents .= "<p>Bericht: $message</p>";

$to_email = 'info@michelhamelink.nl';
$subject = 'Contactformulier inzending';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: '.$name.' <noreply@michelhamelink.nl>';

mail($to_email, $subject, $contents, implode("\r\n", $headers));

header('Location: https://michelhamelink.nl');
?>
