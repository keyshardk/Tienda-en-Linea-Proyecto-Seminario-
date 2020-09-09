<?php
$correo   = '';
$mail     = $_POST['correo'];
$mensaje  = $_POST['mensaje'];
$nombre   = $_POST['nombre'];
$celular   = $_POST['cel'];
$space    = " ";
$cliente  = "Quien envía el correo  es:  ".$nombre;
$linea    = "Consulta Formulario desde Sitio Web";
$linea1   = $cliente;
$linea3   = "Correo: ".$mail;
$linea5   = "Celular: ".$celular;
$linea4   = "Mensaje: ".$mensaje;
$salto="\n";

$mensaje=$linea1.$salto.$linea3.$salto.$linea5.$salto.$linea4.$salto;

if(!(mail($correo,$linea,$mensaje,$linea1)))
{
     echo "Correo no Enviado";
}
else
{
     echo "<script language='javascript'>
    alert('Mensaje enviado, pronto nos pondremos en contacto.');
    window.location.href = 'index.php';
    </script>";
}





