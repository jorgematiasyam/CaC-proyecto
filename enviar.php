<?php 

//variables
$nombres=$_POST['nombres'];

$correo=$_POST['correo'];

$mensaje=$_POST['mensaje'];


// configuramos datos de email

$destinatario="jorgematiasyam@gmail.com";

$asunto= "Email enviado desde mi sitio";


// cuerpo de email

$cuerpo.="Nombres: ".$nombres."\n";

$cuerpo.="E-mail: ".$correo."\n";

$cuerpo.="Mensaje: ".$mensaje."\n";


// enviamos el email

mail($destinatario,$asunto,$cuerpo);

echo $nombre, "Gracias por contactarnos!!!";		

?>
