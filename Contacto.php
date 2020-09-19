<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Muebleria Velasquez (Contacto)</title>
  <meta name="description" content="Fabrica de Muebles Velasquez">
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <link href="Logo/LOGO.png" rel="shortcut icon" /><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="keywords" content="SoccerPlay" />
  <link rel="stylesheet" href="assets/css/style-starter.css">
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
								<button class="top_transmitv_cart" type="submit" name="submit" value="">
									Mi Carrito
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
								<form action="Perfil/Inicio_Sesion.php" method="post">
									<div class="form-group">
										<p class="login-texthny mb-2">Correo</p>
										<input type="email" class="form-control" id="Correo"  name="Correo" placeholder="" required="">
									</div>
									<div class="form-group">
										<p class="login-texthny mb-2">Contraseña</p>
										<input type="password" class="form-control" id="Clave" name="Clave" placeholder="" required="">
                                      <a href="Perfil/Clave.php"><center><small  class="form-text text-muted">¿Olvidaste tu Constraseña?</small></center></a>  
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
								<a class="nav-link" href="index.php">Inicio</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="Categoria.php">Comedores</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Categoria.php">Salas</a>
							  </li>
							<li class="nav-item active">
								<a class="nav-link" href="Contacto.php">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
      </header>
        
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Nombre Categoria</h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.php">Inicio</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active">Nombre Categoria</li>
            </ol>
          </nav>
        </div>
      </div>
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
								<a class="nav-link" href="index.php">Inicio</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="Categoria.php">Comedores</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Categoria.php">Salas</a>
							  </li>
							<li class="nav-item active">
								<a class="nav-link" href="Contacto.php">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
      </header>
        
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Nombre Categoria</h2>
            <ol class="breadcrumb mb-0">
              <li><a href="index.php">Inicio</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active">Nombre Categoria</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    </div>
</section>
                <?php
            }
            ?>

<section class="w3l-contacts-8">
    <div class="contacts-9 section-gap py-5">
      <div class="container py-lg-5">
        <div class="row top-map">
          <div class="col-lg-6 partners">
            <div class="cont-details">
              <p class="margin-top"><span class="texthny">Telefono : </span> <a href="tel:+(21) 255 999 8899">+(502)
                  0000-0000</a></p>
              <p> <span class="texthny">Correo : </span> <a href="mailto:info@example.com">
                  info@example.com</a></p>
              <p class="margin-top">11 calle, Final lote 59 colonia los Pinos zona 17<br> Guatemala -- Guatemala </p>
            </div>
            <div class="hours">
              <h3 class="hny-title">Nuestros&nbsp; <span>Horarios</span></h5>
              <p> Lunes a Viernes 8:00 am - 5:00 pm</p>
              <p> Sabado Medio Dia </p>
              <p> Domingo Cerrado </p>
            </div>
          </div>
          <div class="col-lg-6 map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.2142075454685!2d-90.46057881831138!3d14.643778502877328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a2baedb91b51%3A0x179c3157634a467b!2s11%20Calle%2C%20Ciudad%20de%20Guatemala!5e0!3m2!1ses-419!2sgt!4v1599677513054!5m2!1ses-419!2sgt" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="map-content-9 form-bg-img">
      <div class="layer section-gap py-5">
        <div class="container py-lg-5">
          <div class="form">
            <h3 class="hny-title two text-center">Envianos un Mensaje</h3>
            <form action="datos.php" class="mt-md-5 mt-4" method="post">
              <div class="input-grids">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" required="">
                <input type="text" name="cel" id="cel" placeholder="Celular" />
                  <input type="email" name="correo" id="correo" placeholder="Correo" required="" />
              </div>
              <div class="input-textarea">
                <textarea name="mensaje" id="mensaje" placeholder="Mensaje" required=""></textarea>
              </div>
              <center><button type="submit" class="btn">Enviar</button></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


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
                                      <li><a href="Categoria.php">Comedores</a></li>
                                      <li><a href="Categoria.php">Salas</a></li>
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

<script src="assets/js/jquery-3.3.1.min.js"></script>
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
<script>
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });
  </script>
 <script src="assets/js/minicart.js"></script>
 <script>
     transmitv.render();
     transmitv.cart.on('transmitv_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
             items = this.items();

             for (i = 0, len = items.length; i < len; i++) {}
         }
     });
 </script>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<script src="assets/js/bootstrap.min.js"></script>

