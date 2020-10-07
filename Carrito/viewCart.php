<?php
// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Carrito de Compra</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Muebleria Velasquez</title>
    <meta name="description" content="Fabrica de Muebles Velasquez">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
    <link href="../Logo/LOGO.png" rel="shortcut icon" /><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="keywords" content="SoccerPlay" />
    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>
    
  
<body>
    
    <div class="menu"></div>
    
<div class="container">
   <center><h1>Carrito de Compra</h1></center> 
    <table class="table">
    <thead>
        <br>
        <br>
        <tr>
            <th><h3>Producto</h3></th>
            <th><h3>Precio</h3></th>
            <th><h3>Cantidad</h3></th>
            <th><h3>Sub Total</h3></th>
            <th> </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0)
        {
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td style="font-size: 16px;"><?php echo $item["name"]; ?></td>
            <td style="color:#50ac42;font-size: 16px;"><?php echo 'Q',' ' .number_format($item["subtotal"]).'.00'; ?>
				<input hidden type="text" id="precio" name="precio[]" value="<?php $item["subtotal"];?>">
            </td>
            <td style="font-size: 16px;"><input  id="cantidad" name="cantidad[]" type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
             <td style="color:#50ac42;font-size: 16px;"><?php echo 'Q',' ' .number_format($item["subtotal"]).'.00'; ?>
				<input hidden type="text" id="subTotal" name="subTotal[]" value="<?php $item["subtotal"];?>">
            </td>
            <td style="font-size: 16px;">
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Su Carrito Esta Vacio</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="../index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i>Continuar Comprando</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
           <td class="text-center"><strong style="color:black;font-size: 16px;">Total <?php echo 'Q',' ' .number_format($cart->total()).'.00'; ?>
            <td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
               </strong>
        </tr>
    </tfoot>
    </table>
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