<?php
session_start();
$_SESSION['usuario'] = $Correo;

include 'conexion.php';	

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) 
    {
		die("Connection failed: " . mysqli_connect_error());
    }

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['email'];
$pass=$_POST['password'];
$encrypt=sha1($pass);


$sql = "select Correo from tbl_usuario where Correo='$correo'";

$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
         echo "<script language='javascript'> alert('El correo ya se encuentra utilizado, intente con otro correo para su registro.'); window.location.href = 'Registrarse.php'; </script>";
    }
  }
else
{
    
    $sql =" INSERT INTO tbl_usuario (Id_Usuario,Nombre,Apellido,Direccion,telefono,Correo,Clave,Estado,Tbl_Tipo_Usuario_Id_Tipo_Usuario) 
    values                  ('','$nombre','$apellido',NULL,NULL,'$correo','$encrypt','Activo','1')";
    $result = mysqli_query($conn,$sql);
    
      echo "<script language='javascript'> alert('Usuario registrado Exitosamente!'); window.location.href = 'Perfil.php'; </script>";

        }
   
?>
