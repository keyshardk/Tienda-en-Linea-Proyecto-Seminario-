<?php
    error_reporting(E_ALL ^ E_NOTICE);
    
session_start();
$_SESSION['Usuario'] = $_POST['Correo'];
   
include 'conexion.php';	

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn) 
    {
        echo "Fallo en Conexion";
		die("Connection failed: " . mysqli_connect_error());
        
	}
		$correo=$_POST['Correo'];
		$pass=$_POST['Clave'];
		$encrypt=sha1($pass);

		$sql = "select Correo, Clave from tbl_usuario where Correo ='$correo' and Clave = '$encrypt'"; 
		$result = mysqli_query($conn,$sql);

date_default_timezone_set('America/Guatemala');
$fecha = date("Y/m/d");
$hora  =  date("H:i:s");

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) 
    {
      	$tipo = "select Tbl_Tipo_Usuario_Id_Tipo_Usuario  from tbl_usuario where Correo ='$correo' "; 
		$resultado = mysqli_query($conn, $tipo);
        $row = mysqli_fetch_assoc($resultado);
        $consulta = $row['Tbl_Tipo_Usuario_Id_Tipo_Usuario'];
        
        if($consulta == '2')
        {
            $insertaBitacora  = "insert INTO `tbl_bitacora`  VALUES ('','".$_SESSION['Usuario']."','Ingreso Usuario','Logueo de usuario Cliente','".$hora."','".$fecha."')";
            $bitacoraInsertada = $conn->query($insertaBitacora);
            echo " <script language='javascript'> window.location.href = 'Perfil.php'; </script>";
              
        } 
        if($consulta == '1')
        {
            $insertaBitacora  = "insert INTO `tbl_bitacora`  VALUES ('','".$_SESSION['Usuario']."','Ingreso Usuario','Logueo de usuario Administrador','".$hora."','".$fecha."')";
            $bitacoraInsertada = $conn->query($insertaBitacora);
            echo "<script language='javascript'> window.location.href = '../panel/inicio.php'; </script>";
        }
     }
  }
else
{
    session_destroy();
    $insertaBitacora  = "insert INTO `tbl_bitacora`  VALUES ('','".$_SESSION['Usuario']."','Fallo Sesion','Datos ingresados no son correctos','".$hora."','".$fecha."')";
        $bitacoraInsertada = $conn->query($insertaBitacora);
    echo "<script language='javascript'> alert('La cuenta o la contraseña es incorrecta.'); window.location.href = '../Index.php'; </script>";
    session_destroy();
}
?>

      