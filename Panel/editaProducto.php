<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Muebles | Velasquez</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?php 
    include 'menu.php';
    $con   = mysqli_connect('localhost','root','','mydb');// 
    if ($con->connect_error) 
       {
        die("Connection failed: " . $conn->connect_error);
        echo "NO CONECTA";
      }?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">                      
                <a href="listadoProductos.php"><button type="button" class="btn btn-block btn-secondary">Ver listado producto</button></a>
              </li>
              <li class="">                      
                <a href="nuevaCategoria.php"><button type="button" class="btn btn-block btn-info">Nueva categoria</button></a>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
  <?php
   $id=$_GET["id"];
         $consultaDetalle ="select id_Producto as id, T0.Codigo_Producto as codigo,T0.Estado as estado,T0.Nombre,T0.Descripcion as descripcion,T0.Estado,T1.Precio,
                          T1.PrecioOferta,T1.existencia,T1.Marca,T1.Imagen1,T1.Imagen2,T1.Imagen3,T2.id_Categorias as idCat,
                          T2.Nombre as categoria from Tbl_Encabezado_Producto T0 
                          INNER JOIN tbl_detalle_producto T1 ON T0.Id_Producto=T1.Tbl_Encabezado_Producto_Id_Producto
                          INNER JOIN tbl_categorias T2 on T1.Tbl_Categorias_Id_Categorias = T2.Id_Categorias WHERE T0.id_Producto = '$id'";
          $datosConsultados=$con->query($consultaDetalle);
          while($row = mysqli_fetch_array($datosConsultados)){
                  $id = $row["id"];
                  $idCat = $row["idCat"];
                  $codigo = $row["codigo"];
                  $categoria = $row["categoria"];
                  $nombre = $row["Nombre"];
                  $descripcion =$row["descripcion"];
                  $precio = $row["Precio"];
                  $precioOferta = $row["PrecioOferta"];
                  $estado = $row["estado"];
                  $existencia = $row["existencia"];
                  $marca = $row["Marca"];
                  $imagen1 = $row["Imagen1"];
                  $imagen2 = $row["Imagen2"];
                  $imagen3 = $row["Imagen3"];

          
                          ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Datos generales del producto</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="ediciones.php" enctype='multipart/form-data'>
              <input hidden name="editaProducto" id="editaProducto" value="editaProducto" type="text" class="form-control" placeholder="Ingrese Código" required="">
              <div class="row">
                 <div class="col-sm-12">
                  <div class="form-group">
                     <input readonly="" id="codigo" name="codigo" value="<?php echo "Código: ".$codigo;?>"></input><br>
                     <input readonly="" id="" name="" value="<?php echo "Categoria:  ".$categoria;?>"></input>
                     <input hidden id="categoriaActual" name="categoriaActual" value="<?php echo "".$idCat;?>"></input><br>
                    <input readonly="" id="estadoActual" name="estadoActual" value="<?php echo "".$estado;?>"></input><br>
                    <input hidden id="id" name="id" value="<?php echo "".$id;?>"></input><br>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label><font color="red">Seleccione Categoria si desea cambiarla!</font></label>
                      <select class="form-control" name="idCategoria" id="idCategoria">
                        <option value=""></option>
                        <?php 
                          $consultaCategoria ="select id_Categorias as id ,nombre from tbl_categorias 
                                                where estado='Activo'";
                          $categoriaConsultada = $con->query($consultaCategoria);
                          while ($row = mysqli_fetch_array($categoriaConsultada)) 
                                {?>
                                  <option value="<?php echo "".$row['id']?>"><?php echo "".$row["nombre"];?></option>
                          <?php } ?>
                        </select>
                      </div>
                       <div class="form-group">
                       <label><font color="red">Seleccione estado si desea cambiarlo!</font></label>
                        <select class="form-control" name="estado" id="estado">
                          <option id="" value=""></option>
                          <option>Activo</option>
                          <option>Inactivo</option>
                        </select>
                      </div>
                         <div class="form-group">
                        <label>Nombre producto</label>
                        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Ingrese nombre" required="" value="<?php echo "".$nombre;?>">
                  </div>
                  <div class="form-group">
                        <label>Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="2" placeholder="Ingrese descripción"><?php echo "".$descripcion;?></textarea>
                  </div>
                  </div>
                  <div class="col-sm-6">
                  <div class="form-group">
                        <label>Marca</label>
                        <input name="marca" id="marca" type="text" class="form-control" placeholder="Ingrese marca" required="" value="<?php echo "".$marca;?>">
                  </div>
                  <div class="form-group">
                        <label>Existencia actual</label>
                        <input name="existencia" id="existencia" class="form-control" placeholder="Ingrese existencia" required="" value="<?php echo "".$existencia;?>"></input>
                  </div>
                  <div class="form-group">
                        <label>Precio producto</label>
                        <input name="precio" id="precio" type="text" class="form-control" placeholder="Ingrese precio" required="" value="<?php echo "".$precio;?>">
                  </div>
                  <div class="form-group">
                        <label>Precio oferta</label>
                        <input name="precioOferta" id="precioOferta" type="text" class="form-control" placeholder="Ingrese precio de oferta" value="<?php echo "".$precioOferta;?>">
                  </div>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Imagenes producto</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    
                   </div>
                    <div class="col-12">
                       <div class="post">
                       <center><img width="230" height="230" class="" src="imagenesProductos/<?php echo "".$imagen1;?>" alt="Muebles Velasquez">
                        <img width="230" height="230" class="" src="imagenesProductos/<?php echo "".$imagen2;?>" alt="Muebles Velasquez">
                        <img width="230" height="230" class="" src="imagenesProductos/<?php echo "".$imagen3;?>" alt="Muebles Velasquez"></center>
                        </div>
                    </div>
                    <div class="form-group">
                       <label>Imagen 1</label>
                      <div class="custom-file">
                      <input hidden value="<?php echo "".$imagen1;?>" accept="image/*" type="text" id="img1" name="img1"  accept="image/png, image/jpeg">

                       <input accept="image/*"  type="file" id="imagen1" name="imagen1" accept="image/png, image/jpeg">
                    </div>
                    <label>Imagen 2</label>
                    <div class="custom-file">
                      <input hidden value="<?php echo "".$imagen1;?>" accept="image/*" type="text" id="img2" name="img2"  accept="image/png, image/jpeg">
                      <input accept="image/*"  type="file" id="imagen2" name="imagen2" accept="image/png, image/jpeg">
                    </div>
                    <label>Imagen 3</label>
                    <div class="custom-file">
                      <input hidden value="<?php echo "".$imagen1;?>" accept="image/*" type="text" id="img3" name="img3"  accept="image/png, image/jpeg">
                    <input accept="image/*"  type="file" id="imagen3" name="imagen3" accept="image/png, image/jpeg">
                    </div>
                  </div>
                  <div class="form-group">
                       <label><font color="red">Revisa antes de EDITAR EL PRODUCTO que todos los datos sean correctos!</font></label>
                     </div>
                   <center>
                  <div class="col-sm-2">
                  <div class="form-group">
                     <button type="submit" class="btn btn-block bg-gradient-info btn-lg">Editar producto</button>
                   </div>
                   <div class="form-group">
                     <button onclick="location.href='eliminaciones.php?id=<?php echo $id;?>&var=<?php echo "prod"?>'" type="button" class="btn btn-danger">Eliminar producto</button>
                 </div>
              </div></center>
                  
                 </div> 
              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
            </form>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    <?php } ?>
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
    <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://mueblesvelasquez.com/">Muebles Velasquez</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
