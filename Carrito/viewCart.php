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

<div class="container">
   <center><h1>Carrito de Compra</h1></center> 
    <table class="table">
    <thead>

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

        </tr>
    </tfoot>
    </table>
</div>

</html>