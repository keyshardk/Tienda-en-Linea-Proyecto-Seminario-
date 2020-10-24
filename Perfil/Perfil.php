
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
<html lang="es" ng-app="BasicApp">

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
    <link rel='stylesheet' href='https://cdn.rawgit.com/angular/bower-material/v0.10.0/angular-material.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/2.0/animate.min.css'>
</head>
   <style>
body { overflow : hidden } // esto igual quitaria horizontal y vertical
</style> 
    
  
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
					<a class="navbar-brand" href="../index.php">
						<center>Muebleria<span class="lohny"> Velasquez</span></center></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa fa-bars"> </span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="../index.php">Inicio</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="Informacion.php">Informacion</a>
							</li>
							<li class="nav-item">
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
            	$tipo = "select Nombre,Apellido  from tbl_usuario where Correo ='$user' "; 
		        $resultado = mysqli_query($conn, $tipo);
                $row = mysqli_fetch_assoc($resultado);
                $nom = $row['Nombre'];
                $ape = $row['Apellido'];
            ?>
          <h3 style="color:white">Bienvenido <h3 style="color:#50ac42;"><?php echo $nom?>&nbsp;<?php echo $ape?> </h3> </h3>
            <br>
            <br>
        </div>
      </div></center> 
    </div>
    </div>
</section>
    
           
  
    <md-content layout="row" layout-align="center start">
    <div layout="row" flex="85" layout-align="center start">
          <md-card>
            <md-toolbar md-scroll-shrink style="background: #50ac42;">
                <div class="md-toolbar-tools">
                    <span>Datos Personales</span>
                    <span flex></span>
            
                </div>
     </md-toolbar>
<md-card-content>
        <md-list>
          <md-list-item class="md-2-line">
            <img class="md-avatar" ng-src="http://icons.iconarchive.com/icons/graphicloads/flat-finance/256/person-icon.png" style="height:80px; width:80px">
            <div>
                
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
            ?>
              <h2 class="md-headline" style=" margin-top: 33px;"><?php echo $nom?>&nbsp;<?php echo $ape?></h2>
            <md-divider></md-divider>
          <md-list-item class="md-2-line">
        <md-icon></md-icon>
        <div class="md-list-item-text" ng-class="md-offset">
          <h3 style="padding-top:8px;"><?php echo $direc?></h3>
          <p class="muted">  Direccion  </p>
        </div>
      </md-list-item>
           <md-divider></md-divider>       
          <md-list-item class="md-2-line">
        <md-icon></md-icon>
        <div class="md-list-item-text" ng-class="md-offset">
          <h3 style="padding-top:8px;"><?php echo $cel?></h3>
          <p class="muted">  Telefono  </p>
        </div>
            <md-divider></md-divider>
      </md-list-item>
         
          <md-list-item class="md-2-line">
        <md-icon  class="ion-android-mail" ng-style="{'font-size':'32px', height: '32px'}"></md-icon>
        <div class="md-list-item-text">
          <h3 style="padding-top:8px;"> <?php echo $cor?></h3>
          <p class="muted">  Correo  </p>
        </div>
      </md-list-item>

          <br>
          <br>
          <br>
          <br>
          <br>
        


 
