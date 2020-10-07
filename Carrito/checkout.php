<?php

include 'dbConfig.php';


include 'Cart.php';
$cart = new Cart;


if($cart->total_items() <= 0)
{
    header("Location: ../index.php");
}


    error_reporting(E_ALL ^ E_NOTICE);
    error_reporting(0);
    $user = $_SESSION['Usuario'];

    if($user == null || $$user = '')
    {
        error_reporting(E_ALL ^ E_NOTICE);
        error_reporting(0);
        echo "<script language='javascript'> alert('Por favor Inicie Sesion.'); window.location.href = '../index.php'; </script>";
        die();
        error_reporting(E_ALL ^ E_NOTICE);
        error_reporting(0);
    }

error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
$query = $db->query("SELECT * FROM tbl_usuario WHERE Correo = '$user'");
$custRow = $query->fetch_assoc();
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Checkout </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>
</head>
<body>
    
        <div class="menu"></div>
<div class="container">
    <center><h1>Vista previa del pedido</h1></center>
    <br>
    <br>
    <br>
    <table class="table">
    <thead>
        <tr>
            <th><h3>Producto</h3></th>
            <th><h3>Precio</h3></th>
            <th><h3>Cantidad</h3></th>
            <th><h3>Sub Total</h3></th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td style="font-size: 16px;"><?php echo $item["name"]; ?></td>
            <td style="color:#50ac42;font-size: 16px;"><?php echo 'Q',' ' .number_format($item["subtotal"]).'.00'; ?>
				<input hidden type="text" id="precio" name="precio[]" value="<?php $item["subtotal"];?>">
            </td>
            <td style="font-size: 16px;"><?php echo $item["qty"]; ?></td>
            <td style="color:#50ac42;font-size: 16px;"><?php echo 'Q',' ' .number_format($item["subtotal"]).'.00'; ?>
				<input hidden type="text" id="subTotal" name="subTotal[]" value="<?php $item["subtotal"];?>">
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td style="font-size: 16px;" colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td style="font-size: 16px;" class="text-center"><strong>
                Total 
                 <?php echo 'Q',' ' .number_format($cart->total()).'.00'; ?>
                </strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Datos de Comprador</h4>
        <p><b>Nombre:</b> <?php echo $custRow['Nombre']; ?></p>
        <p><b>Correo:</b> <?php echo $custRow['Correo']; ?></p>
        <p><b>Telefono:</b> <?php echo $custRow['telefono']; ?></p>
        <p><b>Direccion:</b> <?php echo $custRow['direccion']; ?></p>
    </div>
    <br>
    <br>
    <div class="footBtn">
        <br>
        <br>
        <a href="viewCart.php" class="btn btn-warning"><h4>Continuar Comprando</h4></a>
        <a href="#" class="btn btn-success orderBtn"><h4>Realizar Pedido</h4></a>
    </div>
</div>
   <div class="pagina"></div>
</body>
    
    <script>
    $(document).ready(function () {
      $('.menu').load('Menu.php');
    });
  </script>
    
     <script>
    $(document).ready(function () {
      $('.pagina').load('Footer.php');
    });
  </script>
</html>