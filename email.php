<?php

if (isset($_POST['submit'])) {
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['mensaje'];
$mobile = $_REQUEST['movil'];

// Set your email address where you want to receive emails.
$to = 'joseluisgomezcecegna@gmail.com';
$subject = 'Mensaje de sitio web.';
$headers = "From: ".$name." <".$email."> \r\n";
$message = "Nombre: ".$name."\nEmail: ".$email."\nMensaje: ".$message."\nTeléfono: ".$mobile;
$send_email = mail($to,$subject,$message,$headers);

echo ($send_email) ? 'success' : 'error';
}
