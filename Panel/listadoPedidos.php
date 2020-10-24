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
    $con   = mysqli_connect('mysql.hostinger.es','u604611936_keyshardm','Juegos15','u604611936_mydb');// Check
    if ($con->connect_error) 
       {
        die("Connection failed: " . $conn->connect_error);
        echo "NO CONECTA";
      }
      $estado=$_GET["id"];
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1>Pedidos <?php echo " ".$estado;?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item active">   
             <?php if($estado =="Abierto"){
              ?>                   
               <label><font color="red">Los pedidos abiertos aún no son gestionados.</font></label>
             <?php }?>
             <?php if($estado =="Cerrado"){
              ?>                   
               <label><font color="red">Los pedidos cerrados ya fueron gestionados.</font></label>
             <?php }?>
             <?php if($estado =="Proceso"){
              ?>                   
               <label><font color="red">Los pedidos en proceso se encuentran en gestión.</font></label>
             <?php }?>
              </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">En la siguiente tabla se encuentran los pedidos <?php echo "".$estado;?>.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Total</th>
                    <th>Accion</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                     $estado=$_GET["id"];
                      $consultaPedido ="select T0.Id_Encabezado_Pedido as id,T0.Estado,T0.Fecha,T0.Hora, CONCAT(T1.Nombre,' ',T1.Apellido) AS usuario, sum(T2.Total) as total from tbl_encabezado_pedido T0 
                        INNER JOIN tbl_usuario T1 ON T0.Tbl_Usuario_Id_Usuario = T1.Id_Usuario
                        INNER JOIN tbl_detalle_pedido T2 ON T0.Id_Encabezado_Pedido = T2.Tbl_Encabezado_Pedido_Id_Encabezado_Pedido WHERE T0.Estado = '$estado' Group by T0.Id_Encabezado_Pedido";
                          $consultando = $con->query($consultaPedido);
                          while ($row = mysqli_fetch_array($consultando)) 
                                {
                                 $estado = $row["Estado"]; 
                                 $id= $row["id"];
                                  ?>
                  <tr>
                    <td><?php echo "".$row["usuario"]?></td>
                    <td><?php echo "".$row["Fecha"]?></td>
                    <td><?php echo "".$row["Hora"]?></td>
                    <td><?php echo "Q. ".number_format($row["total"])?></td>
                    <td>
                      <?php if($estado  == "Abierto"){ ?>
                           <button onclick="location.href='pedidoAbierto.php?id=<?php echo $id;?>&s=<?php echo $estado;?>'" type="button" class="btn btn-secondary">Gestionar Pedido</button>
                     <?php } ?>
                     <?php if($estado  == "Proceso"){?>
                           <button onclick="location.href='pedidoAbierto.php?id=<?php echo $id;?>&s=<?php echo $estado;?>'" type="button" class="btn btn-secondary">Cerrar Pedido</button>
                     <?php } ?>
                     <?php if($estado  == "Cerrado"){?>
                           <button onclick="location.href='pedidoAbierto.php?id=<?php echo $id;?>&s=<?php echo $estado;?>'" type="button" class="btn btn-secondary">Ver Pedido</button>
                     <?php } ?>
                    </td>
                    
                  </tr>
               <?php } ?>
               </tbody>
                  <tfoot>
                  <tr>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Total</th>
                    <th>Accion</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
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
<!--<script src="dist/js/adminlte.min.js"></script>-->
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
