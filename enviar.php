<?php
$destino="chaco.cm2001@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido ="Nombre" . $nombre "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " .$mensaje;
mail($destino,"Cotización",$contenido);
header("Location: /gracias.html",TRUE,301);
?>