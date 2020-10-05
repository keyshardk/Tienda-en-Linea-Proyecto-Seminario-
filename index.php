<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Muebleria Velasquez</title>
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
              <section class="w3l-banner-slider-main">
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
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Categoria.php?id=1">Comedores</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Categoria.php?id=2">Salas</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="Contacto.php">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
        
        
        
		<div class="bannerhny-content">
			<div class="content-baner-inf">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="carousel-caption">
									<h3>Calidad!</h3>
								</div>
							</div>
						</div>
						<div class="carousel-item item2">
							<div class="container">
								<div class="carousel-caption">
									<h3>Confort...</h3>
								</div>
							</div>
						</div>
						<div class="carousel-item item3">
							<div class="container">
								<div class="carousel-caption">
									<h3>Elegancia.</h3>
								</div>
							</div>
						</div>
						<div class="carousel-item item4">
							<div class="container">
								<div class="carousel-caption">
									<h3>Exclusividad</h3>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="right-banner">
				<div class="right-1">
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
                 <section class="w3l-banner-slider-main">
	<div class="top-header-content">
		<header class="tophny-header">
			<div class="container-fluid">
				<div class="top-right-strip row">
					<div class="top-hny-left-content col-lg-6 pl-lg-0">
					</div>
					<ul class="top-hnt-right-content col-lg-6">
                        <li class="transmitvcart galssescart2 cart cart box_1">
							<form action="Perfil/Perfil.php" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button style="background-color: black;" class="top_transmitv_cart" type="submit" name="submit" value="">
									Mi Perfil
									<span class="fa fa-user-circle-o"></span>
								</button>
							</form>
						</li>
                          <li class="transmitvcart galssescart2 cart cart box_1">
							<form action="Perfil/cerrrar_sesion.php" method="post" class="last">
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
								<button style="background-color: black;" class="top_transmitv_cart" type="submit" name="submit" value="">
									Mi Carrito
									<span class="fa fa-shopping-cart"></span>
								</button>
							</form>
						</li>
					</ul>
<!--Formulario Inicio Sesion                    -->

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
								<a class="nav-link" href="index.php">Inicio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Categoria.php?id=1">Comedores</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="Categoria.php?id=2">Salas</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="Contacto.php">Contacto</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="bannerhny-content">
			<div class="content-baner-inf">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="container">
								<div class="carousel-caption">
									<h3>Calidad</h3>
								</div>
							</div>
						</div>
						<div class="carousel-item item2">
							<div class="container">
								<div class="carousel-caption">
									<h3>Confort...</h3>
								</div>
							</div>
						</div>
						<div class="carousel-item item3">
							<div class="container">
								<div class="carousel-caption">
									<h3>Elegancia.</h3>
								</div>
							</div>
						</div>
						<div class="carousel-item item4">
							<div class="container">
								<div class="carousel-caption">
									<h3>Exclusividad
									</h3>
								</div>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="right-banner">
				<div class="right-1">
				</div>
			</div>
		</div>
    </div>
</section><?php }?>
<center>

    <section class="w3l-grids-hny-2">
<center><div class="grids-hny-2-mian py-5">
		<center><div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Categorias</h3>
			<center><div class="welcome-grids row mt-5">
				<?php 
 					$con = mysqli_connect('localhost','root','','mydb');
 					$categorias = "select T0.Id_Categorias as idCategoria,T0.Nombre, T1.Imagen1 from tbl_categorias T0 INNER JOIN tbl_detalle_producto T1 ON T0.Id_Categorias = T1.Tbl_Categorias_Id_Categorias where T0.Estado = 'Activo'";
 					$consulta   = $con->query($categorias);
 					while ($row = mysqli_fetch_array($consulta)) {
 					$nombre = $row["Nombre"];
 					$idCategoria = $row["idCategoria"];
 					$imagen = $row["Imagen1"];?>
					<div class="col-lg-2 col-md-4 col-6 welcome-image">
						<div class="boxhny13">
								<a href="Categoria.php?id=<?php echo $idCategoria;?>">
										<img style="    max-width: 150px;max-height: 150px;" src="panel/imagenesProductos/<?php echo $imagen;?>" class="img-fluid" alt="" />
								<div class="boxhny-content">
                                    <h3 class="title"><?php echo "".$nombre;?></h3>
								</div>
							</a>
						</div>
						<h4><a href="#URL"><?php echo "".$nombre;?></a></h4>
				</div>
				<?php } ?>
				
			</div>
    </center>
		</div>
    </center>
	</div>
    </center>	
</section>

    </center>

    
<section class="features-4">
	<div class="features4-block py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title text-center">Nuestros Servicios</h3>
			<div class="features4-grids text-center row mt-5">
				<div class="col-lg-3 col-md-6 features4-grid">
					<div class="features4-grid-inn">
						<span class="fa fa-bullhorn icon-fea4" aria-hidden="true"></span>
						<h5><a href="#URL">Llámanos 24/7</a></h5>
                        <p></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
						<div class="features4-grid-inn">
							<span class="fa fa-truck icon-fea4" aria-hidden="true"></span>
							<h5><a href="#URL">Envio Gratis</a></h5>
							<p></p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 features4-grid">
							<div class="features4-grid-inn">
								<span class="fa fa-recycle icon-fea4" aria-hidden="true"></span>
								<h5><a href="#URL">Devoluciones</a></h5>
								<p></p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 features4-grid">
								<div class="features4-grid-inn">
									<span class="fa fa-money icon-fea4" aria-hidden="true"></span>
									<h5><a href="#URL">Pagos seguros</a></h5>
									<p></p>
								</div>
				        </div>
			</div>
		</div>
	</div>
</section>
    
    
<?php 
 $con = mysqli_connect('localhost','root','','mydb');
 if($con ->connect_error){
 	echo "No Conecta";
	}
	$masVendidos ="select T0.Tbl_Encabezado_Producto_Id_Producto as idProducto, T0.Imagen1 ,T0.Imagen2,T0.Precio, T0.PrecioOferta, T1.Nombre 
					FROM tbl_detalle_producto T0 
					INNER JOIN tbl_encabezado_producto T1 ON T0.Tbl_Encabezado_Producto_Id_Producto = T1.Id_Producto
					INNER JOIN tbl_detalle_pedido T2 ON T0.Tbl_Encabezado_Producto_Id_Producto = T2.id_Producto  where T1.Estado = 'Activo' LIMIT 4";
	$consulta = $con->query($masVendidos);
	while ($row = mysqli_fetch_array($consulta))
		  {
		     $imagen  = $row["Imagen1"];
		     $imagen2 = $row["Imagen2"];
		     $idProducto  = $row["idProducto"];
		     $precio = $row["Precio"];
		     $precioOferta = $row["PrecioOferta"];
		     $nombre = $row["Nombre"];?>
<section class="w3l-ecommerce-main">
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Lo Mas Vendido</h3>
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				<div class="col-lg-3 col-6 product-incfhny mt-4">
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<input type="hidden" name="idProducto" id="idProducto" value="<?php echo $idProducto;?>">
							<a href="Descripcion.php?id=<?php echo $idProducto;?>">
								<center><img style="max-width: 230px;" class="pic-1 img-fluid" src="panel/imagenesProductos/<?php echo "".$imagen;?>"></center>
								<center><img  style="max-width: 230px;" class="pic-2 img-fluid" src="panel/imagenesProductos/<?php echo "".$imagen2;?>"></center>
							</a>
							<div class="transmitv single-item">
							<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Women Maroon Top">
									<input type="hidden" name="amount" value="899.99">
									<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Agregar a Carrito
									</button>
								</form>
							</div>
						</div>
						<?php if(is_null($precioOferta)){?>
							<div class="product-content">
								<h3 class="title"><a href="#"><?php echo "".$nombre;?></a></h3>
								<span class="price"><?php echo "Q. ".number_format($precio).".00";?></span>
						   </div>
						<?php  }else{ ?>
						<div class="product-content">
							<h3 class="title"><a href="#"><?php echo "".$nombre;?></a></h3>
							<span class="price"><del><?php echo "Q. ".number_format($precio).".00";?></del><?php echo "Q. ".number_format($precioOferta).".00";?>
						</div><?php  } ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section><?php  } ?>



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
                              <p class="mb-5">+502 2424-5800</p>
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
 <script src="assets/js/minicart.js"></script>
<script src="assets/js/jquery.magnific-popup.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

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

