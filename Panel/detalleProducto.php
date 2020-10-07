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
      }
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detalle producto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item active">                      
                <a href="listadoProductos.php"><button type="button" class="btn btn-block btn-secondary">Ver listado producto</button></a>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

       <section class="content">
        <?php $con=mysqli_connect('localhost','root','','mydb');
        if($con->connect_error){
          echo "Error de conexion";
        }
        $id=$_GET["id"];
        $consultaDetalle ="select T0.Codigo_Producto as codigo,T0.Nombre,T0.Descripcion as descripcion,T0.Estado,T1.Precio,
                          T1.PrecioOferta,T1.existencia,T1.Marca,T1.Imagen1,T1.Imagen2,T1.Imagen3,
                          T2.Nombre as categoria from Tbl_Encabezado_Producto T0 
                          INNER JOIN tbl_detalle_producto T1 ON T0.Id_Producto=T1.Tbl_Encabezado_Producto_Id_Producto
                          INNER JOIN tbl_categorias T2 on T1.Tbl_Categorias_Id_Categorias = T2.Id_Categorias WHERE T0.id_Producto = '$id'";
        $detalleProducto = $con->query($consultaDetalle);
        while ($row =mysqli_fetch_array($detalleProducto)) 
              {
                $nombre=$row["Nombre"];
                $categoria=$row["categoria"];
                $marca=$row["Marca"];
                $existencia=$row["existencia"];
                $estado=$row["Estado"];
                $codigo=$row["codigo"];
                $descripcion=$row["descripcion"];
                $precio=$row["Precio"];
                $precioOferta=$row["PrecioOferta"];
                $imagen1=$row["Imagen1"];
                $imagen2=$row["Imagen2"];
                $imagen3=$row["Imagen3"]; ?>
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo "".$nombre;?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
              <div class="row">
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted"><font color="blue">Categoría</font></span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo "".$categoria;?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted"><font color="blue">Marca</font></span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo "".$marca;?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted"><font color="blue">Existencia</font></span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo "".$existencia;?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-3">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted"><font color="blue">Estado</font><span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo "".$estado;?><span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-6">
                   <p><font color="blue">Código:</font><?php echo "".$codigo;?></p>
                   <p><font color="blue">Nombre:</font><?php echo "".$nombre;?></p>
                    <div class="post">
                      <div class="user-block">
                       <p><font color="blue">Descripción:</font><?php echo "".$descripcion;?></p>
                      </div>
                       <p>
                        <a href="#" class="link-black text-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ver en tienda</a>
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block">
                        
                      </div>
                    
                    </div>
                </div>
                <div class="col-6">
                   <p><font color="blue">Precio: </font><?php echo "Q. ".number_format($precio)." .00"?></p>
                   <?php  
                      if($precioOferta <> ''){?>
                        <p><font color="blue">Precio Oferta: </font><?php echo "Q. ".number_format($precioOferta)." .00"?></p>
                     <?php }else{?>
                        <p><font color="blue">Precio Oferta: </font><?php echo "NO OFERTADO"?></p>
                     <?php }
                   ?>
                   
                    
                </div>
              </div>
              <div class="col-12">
                <div class="post">
                       <center><img width="230" height="230" class="" src="imagenesProductos/<?php echo "".$imagen1;?>" alt="Muebles Velasquez">
                        <img width="230" height="230" class="" src="imagenesProductos/<?php echo "".$imagen2;?>" alt="Muebles Velasquez">
                        <img width="230" height="230" class="" src="imagenesProductos/<?php echo "".$imagen3;?>" alt="Muebles Velasquez"></center>
                </div>
             </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
<?php } ?>
    </section>
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
