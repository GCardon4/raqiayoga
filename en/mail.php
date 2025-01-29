<?php
$firstn = $_POST['firstn'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$message = $_POST['message'];
$formcontent="Nombre Completo: $firstn \n Email: $email \n Phone: $phone \n Mensaje: $message";
$recipient = "recepcion@raqiayoga.com";
$subject = "Contacto Página Raqia";
$mailheader = "Desde: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
require_once "thank-you.html";
?>