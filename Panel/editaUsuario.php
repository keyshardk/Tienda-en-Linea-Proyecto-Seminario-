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
    $con = mysqli_connect('localhost','root','','mydb');
    if($con->connect_error){
      echo "No conecta";
    }
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">                      
                <a href="listadoUsuarios.php"><button type="button" class="btn btn-block btn-secondary">Ver listado usuarios</button></a>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
  <?php 
  $id = $_GET["id"];
  $consultausuario="select T0.Id_Usuario as id,T0.Nombre,T0.Apellido,T0.Correo,
                    T0.Estado,T1.Detalle as tipoUser from tbl_usuario T0 
                    INNER JOIN tbl_tipo_usuario T1 ON T0.Tbl_Tipo_Usuario_Id_Tipo_Usuario = T1.Id_Tipo_Usuario where T0.Id_Usuario = '$id'";
  $consultados = $con->query($consultausuario);
  while ($row = mysqli_fetch_array($consultados)) {
    $id = $row["id"];
        $nombre = $row["Nombre"];
        $apellido = $row["Apellido"];
        $correo = $row["Correo"];
        $estado =$row["Estado"];
        $tipoUser = $row["tipoUser"];
      
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Datos generales del usuario</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="ediciones.php" enctype='multipart/form-data'>
              <div class="row">
                <div class="col-sm-6">
                      <div class="form-group">
                       <label>Nombre</label>
                         <input hidden name="editaUsuario" id="editaUsuario" value="editaUsuario" type="text" class="form-control" placeholder="Ingrese Código" required="">
                          <input hidden readonly="" id="estadoActual" name="estadoActual" value="<?php echo "".$estado;?>"></input><br>
                          <input hidden id="id" name="id" value="<?php echo "".$id;?>"></input><br>
                        <input required name="nombre" id="nombre" type="text" class="form-control" placeholder="Ingrese Nombre" value="<?php echo "".$nombre;?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input required name="apellido" id="apellido" type="text" class="form-control" placeholder="Ingrese apellido" value="<?php echo "".$apellido;?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Correo electronico</label>
                        <input readonly="" required name="correo" id="correo" type="email" class="form-control" placeholder="Ingrese correo electronico" value="<?php echo "".$correo;?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Contraseña</label>
                        <input readonly="" required name="pass" id="pass" type="password" class="form-control" placeholder="Ingrese contraseña" value="***">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                      <div class="form-group">
                        <label><font color="blue">Estado actual:  </font><?php echo " ".$estado?></label>
                       
                      </div>
                      </div>
                   <div class="col-sm-6">
                      <div class="form-group">
                        <label><font color="red">Seleccione estado si desea cambiarlo</font></label>
                        <select class="form-control" name="estado" id="estado">
                          <option>Activo</option>
                          <option>Inactivo</option>
                        </select>
                      </div>
                      </div>
                         </div>
                        <center>
                  <div class="col-sm-2">
                  <div class="form-group">
                     <button type="submit" class="btn btn-block bg-gradient-info btn-lg">Editar usuario</button>
                   </div>
                   <div class="form-group">
                     <button onclick="location.href='eliminaciones.php?id=<?php echo $id;?>&var=<?php echo "user"?>'" type="button" class="btn btn-danger">Eliminar usuario</button>
                 </div>
              </div></center>
                  </div>
                
              </div>
              <!-- /.card-body -->
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
