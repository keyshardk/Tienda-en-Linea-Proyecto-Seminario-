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
      $fechaActual = date("Y/m/d");
      $id_Pedido = $_GET["id"];
      $estado    = $_GET["s"];
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php if($estado == "Abierto"){?>
            <h1><font color="green">Pedido Abierto</font></h1>
          <?php } ?>
           <?php if($estado == "Proceso"){?>
            <h1><font color="orange">Pedido Proceso</font></h1>
          <?php } ?>
           <?php if($estado == "Cerrado"){?>
            <h1><font color="red">Pedido Cerrado</font></h1>
          <?php } ?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">                      
                <a href="listadoPedidos.php?id=<?php echo "Abierto";?>"><button type="button" class="btn btn-block btn-secondary">Ver listado pedidos</button></a>
              </li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <section class="content">
  <?php 
                             $consultaPedido = "select T0.Id_Encabezado_Pedido  as id,T0.Fecha,T0.Hora,T0.Estado, concat(T1.Nombre,' ',T1.Apellido) as cliente,T1.Correo, T1.direccion, T1.telefono from tbl_encabezado_pedido T0
                INNER JOIN tbl_usuario T1 on T0.Tbl_Usuario_Id_Usuario = T1.Id_Usuario where Id_Encabezado_Pedido = '$id_Pedido' and T0.Estado = '$estado'";
                $consultando = $con->query($consultaPedido);
                while ($row = mysqli_fetch_array($consultando)) 
                      {
                       $cliente = $row["cliente"];
                       $direccion = $row["direccion"];
                       $telefono = $row["telefono"];
                       $correo = $row["Correo"];
                       $fecha = $row["Fecha"];
                       $hora = $row["Hora"];
                       $estado = $row["Estado"];
                       $pedido = $row["id"];
                
              ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php if($estado == "Abierto"){?>
              <div class="callout callout-info">
                  <h5><i class="fas fa-info"></i> Nota:</h5>
                      Este pedido se encuentra Abierto para iniciar su proceso de Gestión Revise que todo se encuentre bien y de click en el botón Gestionar Pedido.
              </div>
            <?php }?>
            <?php if($estado == "Proceso"){?>
              <div class="callout callout-info">
                  <h5><i class="fas fa-info"></i> Nota:</h5>
                      Este pedido se encuentra en Proceso , ya fué gestionado y se encuentra en proceso de entrega y de ser finalizado.
              </div>
            <?php }?>
            <?php if($estado == "Cerrado"){?>
              <div class="callout callout-info">
                  <h5><i class="fas fa-info"></i> Nota:</h5>
                      Este pedido se encuentra Cerrado, ya fué gestionado y finalizado.
            <?php }?>
            




            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Muebles Velasquez
                    <small class="float-right">Fecha <?php echo "".date("Y/m/d");?></small>
                    
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  De:
                   <address>
                    <strong>Muebles Velasquez</strong><br>
                    Colonia Los Pinos<br>
                    Guatemala, CA 10018<br>
                    Telefono: (502) 123-5432<br>
                    Email: mueblesvelasquez@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  Para: 
                  <address>
                    <strong><?php echo "".$cliente;?></strong><br>
                    <?php echo "".$direccion;?><br>
                    Celular: (502) <?php echo "".$telefono;?><br>
                    Email: <?php echo "".$correo;?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Estado pedido  <?php echo "".$estado;?></b><br>
                  <br>
                  <b># de orden: </b><?php echo "".$pedido; ?><br>
                  <b>Fecha pedido:</b> <?php echo "".$fecha;?><br>
                  <b>Hora pedido:</b> <?php echo "".$hora;?>
                </div>
                <!-- /.col -->
              <?php } ?>
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <?php 

                   $pedidoDetalle = "select T0.Cantidad ,T0.Precio, T2.Nombre, T2.Descripcion ,T0.Tbl_Encabezado_Pedido_Id_Encabezado_Pedido  as idEncabezado  
                      from tbl_detalle_pedido T0 
                     INNER JOIN tbl_detalle_producto  T1  ON T0.id_Producto = T1.Id_Detalle_Producto
                     INNER JOIN tbl_encabezado_producto T2 ON T1.Tbl_Encabezado_Producto_Id_Producto = T2.Id_Producto
                     WHERE T0.Tbl_Encabezado_Pedido_Id_Encabezado_Pedido = '$id_Pedido'";
                     $consultando = $con->query($pedidoDetalle);
                     while ($row = mysqli_fetch_array($consultando)) {
                             $cantidad = $row["Cantidad"];
                             $precio = $row["Precio"];
                             $nombre = $row["Nombre"];
                             $descripcion = $row["Descripcion"];
                             $idEncabezado = $row["idEncabezado"];
                             $subtotal = $cantidad*$precio;
                     

                  ?>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Cantidad</th>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Precio Unidad</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><?php echo "".$cantidad;?></td>
                      <td><?php echo "".$nombre;?></td>
                      <td><?php echo "".$descripcion;?></td>
                      <td><?php echo "Q. ".number_format($precio).".00";?></td>
                      <td><?php echo "Q. ".number_format($subtotal).".00";?></td>
                    </tr>
                   </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
                <?php } ?> 
            <form  method="POST" action="pedidoImprime.php">
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Importante:</p>
                  <?php if($estado == "Abierto"){ ?>
                 <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Cuando de click en el boton "Gestionar pedido" se generá un pdf , en este momento el pedido ya se encuentra en gestión.
                  </p><?php } ?>
                  <?php if($estado == "Proceso"){?>
                 <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Cuando de click en el boton "Cerrar Pedido" el pedido cambiará a un estado de Cerrado.
                  </p><?php } ?>
                  <?php if($estado == "Cerrado"){?>
                 <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                   El pedido ya se encuentra finalizado.
                  </p><?php } ?>
                </div>
                <!-- /.col -->
               
                <?php 
                  $pedidoPago = "select T0.Tbl_Encabezado_Pedido_Id_Encabezado_Pedido as idEncabezado,T0.Cantidad ,T0.Precio ,T2.Envio as envio from tbl_detalle_pedido T0 
                      INNER JOIN tbl_detalle_producto  T1  ON T0.id_Producto = T1.Id_Detalle_Producto
                    INNER JOIN tbl_encabezado_pedido T2 ON T0.Tbl_Encabezado_Pedido_Id_Encabezado_Pedido = T2.Id_Encabezado_Pedido WHERE T0.Tbl_Encabezado_Pedido_Id_Encabezado_Pedido = '$id_Pedido'";
                     $consultando = $con->query($pedidoPago);
                     while ($row = mysqli_fetch_array($consultando)) {
                             $idEncabezado = $row["idEncabezado"];
                             $cantidad = $row["Cantidad"];
                             $precio = $row["Precio"];
                             $envio = $row["envio"];
                             $subtotal = $cantidad*$precio; ?>
                <div class="col-12">
                  <input hidden type="" name="idEncabezado" id="idEncabezado" value="<?php echo "".$idEncabezado;?>">

                   <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?php echo "Q. ".number_format($subtotal).".00";?></td>
                      </tr>
                      <tr>
                        <th>Envío</th>
                        <?php if($estado == "Abierto"){?>
                        <td><input type="text" name="envio" id="envio" ></td>
                      <?php } ?>
                      <?php if($estado == "Proceso"){?>
                        <td><input readonly type="text" name="envio" id="envio" value="<?php echo "".$envio;?>" ></td>
                      <?php } ?>
                      <?php if($estado == "Cerrado"){?>
                        <td><input readonly type="text" name="envio" id="envio" value="<?php echo "".$envio;?>"></td>
                      <?php } ?>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td><?php echo "Q. ".number_format($subtotal).".00"?><strong> + envío</strong></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
            
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <?php 
                      if($estado == "Abierto"){?>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-print"></i> Gestionar pedido</button>
                      <?php } ?>
                      </form>
                       <form method="POST" action="ediciones.php">
                       <?php if($estado == "Proceso"){?>
                       
                          <input  hidden name="pedidoProceso" id="pedidoProceso" value="pedidoProceso">
                          <input  hidden name="idPedido" id="idPedido" value="<?php echo "".$idEncabezado;?>">
                          <button type="submit" class="btn btn-primary">Cerrar pedido</button>
                      
                      <?php }?>
                      </form>
                     <?php if($estado == "Cerrado"){?>
                        
                      <?php } ?>
                   
                <?php } ?>
                </div>
              </div>
            </div>
          
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
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

