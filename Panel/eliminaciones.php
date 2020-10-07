<?php
error_reporting(E_ALL ^ E_NOTICE);
$con   = mysqli_connect('localhost','root','','mydb');// 
//$con   = mysqli_connect('server','user','pass','bd');// Check
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "NO CONECTA";
}
$fecha = date("Y/m/d");
$hora  =  date("H:i:s");
$usuario="prueba";
if($_GET["var"] == "prod"){
   
     $eliminaProducto ="delete FROM tbl_encabezado_producto WHERE id_Producto='".$_GET["id"]."'";
     $productoEliminado =$con->query($eliminaProducto);

     $eliminaDetalleProducto ="delete FROM tbl_detalle_producto WHERE Tbl_Encabezado_Producto_Id_Producto='".$_GET["id"]."'";
     $productoDetalleEliminado =$con->query($eliminaDetalleProducto);

     $nombre="Elimina Producto";
     $descripcion="Se ha eliminado producto id: ".$_GET["id"];
     $insertaBitacora  = "insert INTO `tbl_bitacora`  
                          VALUES ('','".$usuario."','".$nombre."','".$descripcion."','".$hora."','".$fecha."')";
    $bitacoraInsertada = $con->query($insertaBitacora);
         echo "<script language='javascript'>alert('Producto eliminado exitosamente');</script>";
         echo "<script language='javascript'>window.open('listadoProductos.php','_self',);</script>";
    }
if($_GET["var"] == "user"){
   
     $eliminaProducto ="delete FROM tbl_usuario WHERE id_Usuario='".$_GET["id"]."'";
     $productoEliminado =$con->query($eliminaProducto);

     
     $nombre="Elimina Usuario";
     $descripcion="Se ha eliminado usuario id: ".$_GET["id"];
     $insertaBitacora  = "insert INTO `tbl_bitacora`  
                          VALUES ('','".$usuario."','".$nombre."','".$descripcion."','".$hora."','".$fecha."')";
    $bitacoraInsertada = $con->query($insertaBitacora);
         echo "<script language='javascript'>alert('Usuario eliminado exitosamente');</script>";
         echo "<script language='javascript'>window.open('listadoUsuarios.php','_self',);</script>";
    }
?>
