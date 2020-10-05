<?php

session_start();
$validar =  $_SESSION['Usuario'];
   
include 'conexion.php';	

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) 
    {
        echo "Fallo en Conexion";
		die("Connection failed: " . mysqli_connect_error());
        
	}
date_default_timezone_set('America/Guatemala');
$fecha = date("Y/m/d");
$hora  =  date("H:i:s");

    $insertaBitacora  = "insert INTO `tbl_bitacora`  VALUES ('','".$validar."','Cierre de Sesion','Usuario cierra su sesion','".$hora."','".$fecha."')";
        $bitacoraInsertada = $conn->query($insertaBitacora);
session_destroy();
    header("location: ../index.php");
?>