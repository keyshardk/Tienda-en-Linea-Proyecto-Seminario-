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
            <h1>Nuevo producto</h1>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Datos generales del producto</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="inserciones.php" enctype='multipart/form-data'>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label><font color="red">Seleccione Categoria</font></label>
                      <select class="form-control" name="idCategoria" id="idCategoria">
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
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Código producto</label>
                         <input hidden name="insertaProducto" id="insertaProducto" value="nuevoProducto" type="text" class="form-control" placeholder="Ingrese Código" required="">
                        <input name="codigoProducto" id="codigoProducto" type="text" class="form-control" placeholder="Ingrese Código" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nombre producto</label>
                        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Ingrese nombre" required="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                     <div class="form-group">
                        <label>Descripción</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="4" placeholder="Ingrese descripción" ></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Seleccione estado</label>
                        <select class="form-control" name="estado" id="estado">
                          <option>Activo</option>
                          <option>Inactivo</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Ingrese existencia</label>
                        <input name="existencia" id="existencia" class="form-control" placeholder="Ingrese existencia" required=""></input>
                      </div>
                     </div>
                  </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Detalle producto</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="form-group">
                        <label>Marca</label>
                        <input name="marca" id="marca" type="text" class="form-control" placeholder="Ingrese marca" required="">
                    </div>
                   <div class="form-group">
                        <label>Precio producto</label>
                        <input name="precio" id="precio" type="text" class="form-control" placeholder="Ingrese precio" required="">
                    </div>
                        <div class="form-group">
                          <label>Precio oferta</label>
                          <input name="precioOferta" id="precioOferta" type="text" class="form-control" placeholder="Ingrese precio de oferta">
                      </div>
                   </div>
                    <div class="form-group">
                       <label>Imagen 1</label>
                      <div class="custom-file">
                       <input accept="image/*" required type="file" id="imagen1" name="imagen1" accept="image/png, image/jpeg">
                    </div>
                    <label>Imagen 2</label>
                    <div class="custom-file">
                      <input accept="image/*" required type="file" id="imagen2" name="imagen2" accept="image/png, image/jpeg">
                    </div>
                    <label>Imagen 3</label>
                    <div class="custom-file">
                    <input accept="image/*" required type="file" id="imagen3" name="imagen3" accept="image/png, image/jpeg">
                    </div>
                  </div>
                  <div class="form-group">
                       <label><font color="red">Revisa antes de CREAR EL PRODUCTO que todos los datos sean correctos!</font></label>
                     </div>
                   <center><div class="col-sm-2">
                  <div class="form-group">
                       <button type="submit" class="btn btn-block bg-gradient-success btn-lg">Crear producto</button>
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
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
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
