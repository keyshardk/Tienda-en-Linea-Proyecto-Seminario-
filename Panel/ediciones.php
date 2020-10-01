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
if($_POST["editaProducto"] == "editaProducto"){

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

        if($_POST["estado"] == ''){
                $estado = $_POST["estadoActual"];
        }else{
                $estado = $_POST["estado"];
        }
        
        if($_POST["idCategoria"] == ''){
                $categoria = $_POST["categoriaActual"];
                
        }else{
                $categoria = $_POST["idCategoria"];
                
        }
        if($imgFile1 == ''){
            $imgProducto1 = $_POST["img1"];
        }
        if($imgFile2 == ''){
            $imgProducto2 = $_POST["img2"];
        }
        if($imgFile3 == ''){
            $imgProducto3 = $_POST["img3"];
        }
               
        $editaProducto = "update `tbl_encabezado_producto` set Nombre='".$_POST["nombre"]."' , Descripcion='".$_POST["descripcion"]."',estado= '".$estado."' where id_Producto = '".$_POST["id"]."'";
        $productoEditado   = $con->query($editaProducto);
        $editaDetalleProducto = "update `tbl_detalle_producto` set Precio='".$_POST["precio"]."',
                          PrecioOferta='".$_POST["precioOferta"]."',Existencia = '".$_POST["existencia"]."', Marca = '".$_POST["marca"]."',Imagen1 ='".$imgProducto1."',Imagen2= '".$imgProducto2."' ,Imagen3 = '".$imgProducto3."',Tbl_Categorias_Id_Categorias = '".$categoria."'
                               where   Tbl_Encabezado_Producto_Id_Producto = '".$_POST["id"]."'";
        $productoEditado   = $con->query($editaDetalleProducto);
        
        $nombre="Edición producto";
        $descripcion="Se ha editado producto: ".$_POST["nombre"];
        $insertaBitacora  = "insert INTO `tbl_bitacora`  
                          VALUES ('','".$usuario."','".$nombre."','".$descripcion."','".$hora."','".$fecha."')";
        $bitacoraInsertada = $con->query($insertaBitacora);
         echo "<script language='javascript'>alert('Producto editado exitosamente');</script>";
         echo "<script language='javascript'>window.open('listadoProductos.php','_self',);</script>";
    }

 if($_POST["editaUsuario"] == "editaUsuario"){

        if($_POST["estado"] == ''){
                $estado = $_POST["estadoActual"];
        }else{
                $estado = $_POST["estado"];
        }
        
               
        $editaProducto = "update `tbl_usuario` set Nombre='".$_POST["nombre"]."' , Apellido='".$_POST["apellido"]."',estado= '".$estado."' where id_Usuario = '".$_POST["id"]."'";
        $productoEditado   = $con->query($editaProducto);
        
        
        $nombre="Edición Usuario";
        $space=" ";
        $descripcion="Se ha editado usuario: ".$_POST["nombre"].$space.$_POST["apellido"];
        $insertaBitacora  = "insert INTO `tbl_bitacora`  
                          VALUES ('','".$usuario."','".$nombre."','".$descripcion."','".$hora."','".$fecha."')";
        $bitacoraInsertada = $con->query($insertaBitacora);
         echo "<script language='javascript'>alert('Usuario editado exitosamente');</script>";
         echo "<script language='javascript'>window.open('listadoUsuarios.php','_self',);</script>";
    }

?>
