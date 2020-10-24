<?php
session_start();
include 'conexion.php';
$conn = mysqli_connect('mysql.hostinger.es','u604611936_keyshardm','Juegos15','u604611936_mydb');// Check
$correo=  $_SESSION['Usuario'];
$asunto = "¡Muchas Gracias por tu Pedido!"; 
$cuerpo = ' 
<html> 
<head> 
  
</head> 
    <style>
.button {
  background-color: #50ac42;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body> 
   <center> <img style="max-width: 250px" src="https://i.ibb.co/RSP0SY3/logo.png"></center>
<center><h1 style="color:#ec6c04;">¡Muchas Gracias por tu Pedido!</h1> </center>
<p> 
<br>
    <center><b>Recientemente realizo un pedido en la tienda en linea,cuando su pedido sea gestionado nuevamente recibira un correo con el detalle del mismo.</b></center>
    <br>
    <center><b> Agradecemos su preferencia al comprar en nuestra tienda.</b></center>
    <br>   <center><b> Puede Ingresar al sistema para verficar el proceso de su pedido:</b></center>
    <br>
   <center><a style=" background-color: #ec6c04; color: white;padding: 15px 32px; text-decoration: none;display: inline-block; font-size: 16px;margin: 4px 2px;  cursor: pointer;" href="../index.php" class="button">Verificar</a></center> 
  
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Muebles Velasquez"; 

if(!(mail($correo,$asunto,$cuerpo,$headers)))
{
     echo "Correo no Enviado";
}
else
{
     echo "<script language='javascript'> window.location.href = '../Perfil/Pedidos.php'; </script>";
}