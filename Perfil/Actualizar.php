<?php
session_start();
 error_reporting(E_ALL ^ E_NOTICE);
$_SESSION['usuario'] = $Correo;

include 'conexion.php';	

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) 
    {
		die("Connection failed: " . mysqli_connect_error());
    }

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$direccion =$_POST['direccion'];
$cel =$_POST['cel'];
$pass=$_POST['password'];
$encrypt=sha1($pass);




     $sql ="UPDATE tbl_usuario SET Nombre = '$nombre', Apellido = '$apellido',direccion = '$direccion', telefono = '$cel', Correo = '$correo'  WHERE Correo = '$correo'";
     $result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
        error_reporting(0);
           echo "<script language='javascript'> alert('Datos No Actualizados.'); window.location.href = 'Informacion.php'; </script>";
         error_reporting(0);
    }
  }
else
{
   
     echo "<script language='javascript'> alert('Datos Actualizados.'); window.location.href = 'Perfil.php'; </script>";
     error_reporting(0);
}
   
?>
