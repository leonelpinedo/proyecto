<?php

$nombre = $_POST ['name']; 
$mail = $_POST ['mail'];
$mensaje = $_POST ['mensaje'];

// como me llega el mail, cuerpo de mail   r\n es para hacer salto de linea

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\r\n";
$mensaje .= "Su mail es: " . $mail . ",\r\n";
$mensaje .= "Mensaje:" . $_POST[mensaje] . "\r\n";
$mensaje .= "Enviado el" . date ('d/m/Y', time());

$destinatario = 'labarcaeventospilar@gmail.com';
$asunto = "Este mail fue enviado desde la wep La Barca";

// funcion mail
// a quien le mando el mail
mail ($destinatario, $asunto, utf8_decode($mensaje), $header);

// redireccion al haber enviado el form
header('location:index.html');
?>