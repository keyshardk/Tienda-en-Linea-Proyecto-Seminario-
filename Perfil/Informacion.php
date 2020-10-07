
<?php
    session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(0);
    $user = $_SESSION['Usuario'];

    if($user == null || $$user = '')
    {
        echo "<script language='javascript'> alert('Por favor Inicie Sesion.'); window.location.href = '../index.php'; </script>";
        die();
    }

?>


<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Muebleria Velasquez</title>
  <meta name="description" content="Fabrica de Muebles Velasquez">
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <link href="../Logo/LOGO.png" rel="shortcut icon" /><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="keywords" content="SoccerPlay" />
  <link rel="stylesheet" href="../assets/css/style-starter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="Estilo/style.css">
</head>
<body>
<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">
    <div class="top-header-content">
      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
            </div>
          </div>
        </div>
    <nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid serarc-fluid">
					<a class="navbar-brand" href="index.php">
						<center>Muebleria<span class="lohny"> Velasquez</span></center></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item e">
								<a class="nav-link" href="../index.php">Inicio</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="Informacion.php">Informacion</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="Pedidos.php">Pedidos</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="cerrrar_sesion.php">Cerrar Sesion</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
      </header>

        
     <center><div class="breadcrumb-contentnhy">
        <div class="container">
               <?php 
            include 'conexion.php';	

                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	            if (!$conn) 
                {           
                    echo "Fallo en Conexion";
		            die("Connection failed: " . mysqli_connect_error());
        
	            }
            	$tipo = "select Nombre,Apellido,direccion,telefono,correo,clave  from tbl_usuario where Correo ='$user' "; 
		        $resultado = mysqli_query($conn, $tipo);
                $row = mysqli_fetch_assoc($resultado);
                $nom = $row['Nombre'];
                $ape = $row['Apellido'];
                $direc = $row['direccion'];
                $cel = $row['telefono'];
                $cor= $row['correo'];
                $clave= $row['clave'];
            ?>
          <h3 style="color:white">Bienvenido <h3 style="color:#50ac42;"><?php echo $nom?>&nbsp;<?php echo $ape?> </h3> </h3>
            <br>
            <br>
        </div>
      </div></center> 
    </div>
    </div>
</section>
<div style="text-align:center;padding:10px;">
    <div>
        <div class="contenedor-formulario">
            <header>
                <h1>Actualizar Datos </h1>
            </header>
            <form action="Actualizar.php" method="post">
                <input class="campo-texto" id="correo" type="email" name="correo" value="<?php echo "".$cor;?>" maxlength="50" required="" />
                <input class="campo-texto" id="nombre" type="text" name="nombre" value="<?php echo "".$nom;?>" maxlength="20" required=""  /> 
                <input class="campo-texto" id="apellido" type="text" name="apellido" value="<?php echo "".$ape;?>" maxlength="20" required=""  /> 
                <input class="campo-texto" id="direccion" type="text" name="direccion"  placeholder="Direccion" value="<?php echo "".$direc?>" maxlength="200" required="" />  
                <input class="campo-texto" id="cel" type="text" name="cel" placeholder="Celular" value="<?php echo "".$cel;?>"maxlength="20" required="" />  
                <input class="campo-texto" type="password" id="password" type="password" name="password"value="<?php echo "".$clave;?>" maxlength="12" required="" disabled/> 
                <input type="submit" value="Actualizar" class="submit" />
            </form>
        </div>
    </div>
</div>
  <section class="w3l-footer-22">
      <div class="footer-hny py-5">
          <div class="container py-lg-5">
              <div class="text-txt row">
                  <div class="left-side col-lg-4">
                      <br>
                      <br>
                      <br>
                      <h3><a class="logo-footer" href="index.php">
                          Muebleria<span class="lohny">&nbsp;  Velasquez</span></a></h3>
                      <ul class="social-footerhny mt-lg-5 mt-4">
                          <li><a class="facebook" href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                          </li>
                          <li><a class="instagram" href="#"><span class="fa fa-instagram" aria-hidden="true"></span></a>
                          </li>
                      </ul>
                  </div>

                  <div class="right-side col-lg-8 pl-lg-5">
                      <div class="sub-columns">
                          <div class="sub-one-left">
                              <h6>Nuestros Links</h6>
                              <div class="footer-hny-ul">
                                  <ul>
                                      <li><a href="index.php">Inicio</a></li>
                                      <li><a href="Categoria.php?id=1">Comedores</a></li>
                                      <li><a href="Categoria.php?id=2">Salas</a></li>
                                      <li><a href="Contacto.php">Contacto</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="sub-two-right">
                              <h6>Direccion</h6>
                              <p class="mb-5">11 calle, Final lote 59 colonia los Pinos zona 17<br> Guatemala -- Guatemala</p>
                                <h6>Telefono</h6>
                              <p class="mb-5">+502 0000-0000</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  </body>
  </html>

