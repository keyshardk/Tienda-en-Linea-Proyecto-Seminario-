<?php
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
error_reporting(0);
include 'Cart.php';
$cart = new Cart;

$user  = $_POST["user"];
$con   = mysqli_connect('mysql.hostinger.es','u604611936_keyshardm','Juegos15','u604611936_mydb');// Check
date_default_timezone_set('America/Guatemala');
$fecha = date("Y/m/d");
$hora  =  date("H:i:s");
$usuario = "select id_Usuario from tbl_usuario where Correo = '$user'";
$consulta = $con->query($usuario);
	while ($row = mysqli_fetch_array($consulta)) 
		  {
		  	$idUsuario = $row["id_Usuario"];
		  	
		  	$sql = "insert INTO `tbl_encabezado_pedido`  
		  			VALUES ('','$fecha','$hora','Abierto','','','$idUsuario')";
			$result   = $con->query($sql);
			$last_id  = mysqli_insert_id($con);

			for ($i = 0; $i < count($_POST["idProducto"]); $i++) 
				{
//					echo "id producto: ".$_POST["idProducto"][$i];
//					echo "cantidad: ".$_POST["cantidad"][$i];
//					echo "´precio: ".$_POST["precio"][$i];
//					echo "total: ".$_POST["cantidad"][$i]*$_POST["precio"][$i];


				$sqlDetalle ="
			INSERT INTO `tbl_detalle_pedido` 
			VALUES ('','".$_POST["idProducto"][$i]."','".$_POST["cantidad"][$i]."', '".$_POST["precio"][$i]."','".$_POST["cantidad"][$i]*$_POST["precio"][$i]."', '', '".$last_id."')";		
			$resultDetalle = $con->query($sqlDetalle);

			$sqlSelect     = "select existencia from tbl_detalle_producto WHERE id_Detalle_Producto ='".$_POST["idProducto"][$i]."'";
	        $resultSelect  = $con->query($sqlSelect);
	        while ($row = mysqli_fetch_object($resultSelect)) {
	        	
	        	  $existencia          = $row->existencia;
	        	  $stock               = $existencia-$_POST["cantidad"][$i];
	        	  $sqlExistenciaUp     = "update tbl_detalle_producto SET existencia = '$stock' 
	        	  where id_Detalle_Producto ='".$_POST["idProducto"][$i]."'";
	              $resultExistenciaUp  = $con->query($sqlExistenciaUp);
	          }
	          $resultExistencia  = $con->query($sqlExistencia);
		}
	}
echo "<script language='javascript'>window.open('confirmando.php','_self',);</script>";//paral archivo pdf generado

?>