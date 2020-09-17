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
if($_POST["insertaProducto"] == "nuevoProducto"){

        $imgFile1     = $_FILES['imagen1']['name'];
        $tmp_dir1     = $_FILES['imagen1']['tmp_name'];
        $imgSize1     = $_FILES['imagen1']['size'];

        $imgFile2     = $_FILES['imagen2']['name'];
        $tmp_dir2     = $_FILES['imagen2']['tmp_name'];
        $imgSize2     = $_FILES['imagen2']['size'];

        $imgFile3     = $_FILES['imagen3']['name'];
        $tmp_dir3     = $_FILES['imagen3']['tmp_name'];
        $imgSize3     = $_FILES['imagen3']['size'];
        
        $upload_dir1   = 'imagenesProductos/'; // upload directory
        $upload_dir2   = 'imagenesProductos/'; // upload directory
        $upload_dir3   = 'imagenesProductos/'; // upload directory
        $imgExt1      = strtolower(pathinfo($imgFile1,PATHINFO_EXTENSION)); // get image extension
        $imgExt2      = strtolower(pathinfo($imgFile2,PATHINFO_EXTENSION)); // get image extension
        $imgExt3      = strtolower(pathinfo($imgFile3,PATHINFO_EXTENSION)); // get image extension
    
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $imgProducto1     = rand(1000,1000000).".".$imgExt1;
        $imgProducto2     = rand(1000,1000000).".".$imgExt2;
        $imgProducto3     = rand(1000,1000000).".".$imgExt3;
        
        $tmp_dirUp1   = $_FILES['imagen1']['tmp_name'];
        $tmp_dirUp2   = $_FILES['imagen2']['tmp_name'];
        $tmp_dirUp3   = $_FILES['imagen3']['tmp_name'];
        move_uploaded_file($tmp_dirUp1,$upload_dir1.$imgProducto1);
        move_uploaded_file($tmp_dirUp2,$upload_dir2.$imgProducto2);
        move_uploaded_file($tmp_dirUp3,$upload_dir3.$imgProducto3);
               
        $insertaProducto = "insert INTO `tbl_encabezado_producto`  
                VALUES ('','".$_POST["codigoProducto"]."','".$_POST["nombre"]."','".$_POST["descripcion"]."','".$_POST["estado"]."')";
        $productoInsertado   = $con->query($insertaProducto);
        $llavePrimaria       = mysqli_insert_id($con);

        $insertaDetalle = "insert INTO `tbl_detalle_producto`  
                            VALUES ('','".$_POST["precio"]."','".$_POST["precioOferta"]."','".$_POST["existencia"]."','".$_POST["marca"]."','".$imgProducto1."','".$imgProducto2."','".$imgProducto3."','".$llavePrimaria."','".$_POST["idCategoria"]."')";
        $detalleInsertado   = $con->query($insertaDetalle);
        $nombre="Nuevo producto";
        $descripcion="Creación de nuevo producto";
        $insertaBitacora  = "insert INTO `tbl_bitacora`  
                          VALUES ('','".$usuario."','".$nombre."','".$descripcion."','".$hora."','".$fecha."')";
        $bitacoraInsertada = $con->query($insertaBitacora);
        echo "<script language='javascript'>alert('Producto almacenado exitosamente');</script>";
        echo "<script language='javascript'>window.open('listadoProductos.php','_self',);</script>";
    }

 if($_POST["insertaCategoria"] == "nuevaCategoria"){
     $nombre="Nueva Categoria";
     $descripcion="Creación de nueva categoría";
     $insertaCategoria  = "insert INTO `tbl_categorias`  
                          VALUES ('','".$_POST["nombre"]."','".$descripcion."','".$_POST["estado"]."')";
     $categoriaInsertada = $con->query($insertaCategoria);
     $insertaBitacora  = "insert INTO `tbl_bitacora`  
                          VALUES ('','".$usuario."','".$nombre."','".$descripcion."','".$hora."','".$fecha."')";
     $bitacoraInsertada = $con->query($insertaBitacora);
     echo "<script language='javascript'>alert('Categoría creada exitosamente');</script>";
     echo "<script language='javascript'>window.open('listadoProductos.php','_self',);</script>";
    }
?>
