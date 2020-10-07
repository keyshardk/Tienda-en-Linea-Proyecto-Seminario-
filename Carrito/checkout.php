<?php
// include database configuration file
include 'dbConfig.php';

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: index.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM tbl_usuario WHERE Nombre = 'Diego'");
$custRow = $query->fetch_assoc();
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
<div class="container">
    <h1>Vista previa del pedido</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>SubTotal</th>
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
            <td><?php echo $item["name"]; ?></td>
            <td style="color:#50ac42;"><?php echo 'Q',' ' .number_format($item["subtotal"]).'.00'; ?>
				<input hidden type="text" id="precio" name="precio[]" value="<?php $item["subtotal"];?>">
            </td>
            <td><?php echo $item["qty"]; ?></td>
            <td style="color:#50ac42;"><?php echo 'Q',' ' .number_format($item["subtotal"]).'.00'; ?>
				<input hidden type="text" id="subTotal" name="subTotal[]" value="<?php $item["subtotal"];?>">
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>
                Total 
                 <?php echo 'Q',' ' .number_format($cart->total()).'.00'; ?>
                </strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Datos de Comprador</h4>
        <p><?php echo $custRow['Nombre']; ?></p>
        <p><?php echo $custRow['Correo']; ?></p>
        <p><?php echo $custRow['telefono']; ?></p>
        <p><?php echo $custRow['direccion']; ?></p>
    </div>
    <div class="footBtn">
        <a href="viewCart.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i>Continuar Comprando</a>
        <a href="#" class="btn btn-success orderBtn">Realizar Pedido <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>
</body>
</html>