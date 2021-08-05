<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$message .= "<p>Bedrijfsnaam: $name</p>";
$message .= "<p>Email: $email</p>";
$message .= "<p>Telefoonnummer: $phone</p>";
$message .= "<p>Bericht: $message</p>";

$to_email = 'info@michelhamelink.nl';
$subject = 'Contactformulier inzending';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=UTF-8';
$headers[] = 'From: '.$name.' <noreply@michelhamelink.nl>';

mail($to_email, $subject, $message, implode("\r\n", $headers));

return json_encode("success")
?>
