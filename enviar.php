<?php
$destino='isaac.cm2001@hotmail.com';
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
$contenido ="Nombre" .$nombre "\nCorreo: " .$correo  "\nTeléfono: "  .$telefono  "\nMensaje: " .$mensaje;
mail($destino,"Cotizacion",$contenido);
header("Location:index.html",TRUE,301);
?>