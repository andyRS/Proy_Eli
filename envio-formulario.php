<?php
$nombre_usuario=$_POST['nombre'];
$email_usuario=$_POST['email'];
$consulta_usuario=$_POST['mensaje'];
// Creo 3 variables que me toman lo que se envía por POST de cada valor del formulario

$destino="elizabethmendezp18@gmail.com";

$asunto="Consulta enviada desde www.dduhtylc.lucusvirtual.es/";

$mensaje="El nombre del cliente es: ".$nombre_usuario."\r\n";
$mensaje.="Email del cliente es: ".$email_usuario."\r\n";
$mensaje.="Mensaje del cliente: ".$consulta_usuario."\r\n";

$remitente="From: jfkoyrib@hl110.lucushost.org";

mail($destino, $asunto, $mensaje, $remitente);


header("Location:index.php?i=ok");
// SI EL FORMULARIO SE ENVIO CORRECTAMENTE, PONEME EN LA URL DESPUES DEL INDEX.PHP UN SIGNO DE PREGUNTA, UNA LETRA I, Y UN IGUAL OK
?>
