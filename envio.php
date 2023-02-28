<?php

// Conecto mi form al server a traves de los name
$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['textarea'];

// Vamos a mostrar un texto plano


// Como me va a llegar a mi el cuerpo del mail
$mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "El telefeno es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['textarea'] . ",\r\n";
$mensaje .= "Enviado el: " . date('d/m/Y', time());

$para = 'mar.villarruel1192@gmail.com'; //El mail donde van a llegar los mensajes
$asunto = "Mensaje de mi sitio web"; //El asunto de los mail que me llegan 

//Funcion mail
//A quien le mando el mail - asunto - mensaje y header
mail($para, $asunto, utf8_decode($mensaje));

//Redireccion al enviar el mail
header('Location:exito.html');
?>