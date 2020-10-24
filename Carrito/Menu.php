<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Muebleria Velasquez</title>
  <meta name="description" content="Fabrica de Muebles Velasquez">
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <link href="/..Logo/LOGO.png" rel="shortcut icon" /><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="keywords" content="SoccerPlay" />
  <link rel="stylesheet" href="../assets/css/style-starter.css">
</head>
<body>
    
  <?php
            session_start();
            error_reporting(E_ALL ^ E_NOTICE);
            error_reporting(0);
            $user = $_SESSION['Usuario'];

            if($user == null || $$user = '')
            {
              ?>
              <section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">
    <div class="top-header-content">
      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
            </div>
         <ul class="top-hnt-right-content col-lg-6">
						<li class="button-log usernhy">
							<a class="btn-open" href="#">
								<span class="fa fa-user" aria-hidden="true"></span>
							</a>
						</li>
						<li class="transmitvcart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_transmitv_cart" type="submit" name="submit" >
									<a href="viewCart.php">Mi Carrito</a>
									<span class="fa fa-shopping-cart"></span>
								</button>
							</form>
						</li>
					</ul>
<!--Formulario Inicio Sesion                    -->
					<div class="overlay-login text-left">
						<button type="button" class="overlay-close1">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<div class="wrap">
							<h5 class="text-center mb-4">Iniciar Sesion</h5>
							<div class="login-bghny p-md-5 p-4 mx-auto mw-100">
								<form action="../Perfil/Inicio_Sesion.php" method="post">
									<div class="form-group">
										<p class="login-texthny mb-2">Correo</p>
										<input type="email" class="form-control" id="Correo"  name="Correo" placeholder="" required="">
									</div>
									<div class="form-group">
										<p class="login-texthny mb-2">Contraseña</p>
										<input type="password" class="form-control" id="Clave" name="Clave" placeholder="" required="">
                                      <a href="../Perfil/Clave.php"><center><small  class="form-text text-muted">¿Olvidaste tu Constraseña?</small></center></a>  
									</div>
									<button type="submit" class="submit-login btn mb-4">Iniciar Sesion</button>
								</form>
                                <button type="submit" onclick="location.href='Perfil/Registrarse.php'" class="submit-login btn1 mb-4">Registrarse</button>
							</div>
						</div>
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
							<li class="nav-item ">
								<a class="nav-link" href="../index.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../Categoria.php?id=1">Comedores</a>
							</li>
							<li class="nav-item" active>
								<a class="nav-link" href="../Categoria.php?id=2">Salas</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="../Contacto.php">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
      </header>
    </div>
    </div>
</section>

                <?php
            }
            else
            {
                ?>
                   <section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">
    <div class="top-header-content">
      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
            </div>
         <ul class="top-hnt-right-content col-lg-6">
                        <li class="transmitvcart galssescart2 cart cart box_1">
							<form action="../Perfil/Perfil.php" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button style="background-color: black;" class="top_transmitv_cart" type="submit" name="submit" value="">
									Mi Perfil
									<span class="fa fa-user-circle-o"></span>
								</button>
							</form>
						</li>
                          <li class="transmitvcart galssescart2 cart cart box_1">
							<form action="../Perfil/cerrrar_sesion.php" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button style="background-color: black;" class="top_transmitv_cart" type="submit" name="submit" value="">
									Cerrar Sesion
									<span class="fa fa-power-off"></span>
								</button>
							</form>
						</li>
						<li class="transmitvcart galssescart2 cart cart box_1">
							<form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="top_transmitv_cart" type="submit" name="submit" >
									<a href="viewCart.php">Mi Carrito</a>
									<span class="fa fa-shopping-cart"></span>
								</button>
							</form>
						</li>
					</ul>
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
							<li class="nav-item active">
								<a class="nav-link" href="../index.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../Categoria.php?id=1">Comedores</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="../Categoria.php?id=2">Salas</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="../Contacto.php">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
      </header>
    </div>
    </div>
</section><?php  } ?>

    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


  </body>
  </html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<script src="assets/js/bootstrap.min.js"></script>
