<?php

include 'Cart.php';
$cart = new Cart;


include 'dbConfig.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action']))
{
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id']))
    {
        $productID = $_REQUEST['id'];
        echo  "Id Original: ".$_REQUEST['id']."<br>";
        echo  "Id: ".$productID."<br>";
        $query = $db->query("SELECT * FROM tbl_detalle_producto WHERE Id_Detalle_Producto = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['Id_Detalle_Producto'],
            'name' => $row['Marca'],
            'price' => $row['Precio'],
            'stock' => $row['existencia'],
            'priceOferta' => $row['PrecioOferta'],
            
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart.php':'index.php';
        header("Location: ".$redirectLoc);
    }
    
    
    elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id']))
    {
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }
    
    
    elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id']))
    {
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");
    }
    
    
    elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID']))
    {
        $insertOrder = $db->query("INSERT INTO orders (customer_id, total_price, created, modified) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        
        if($insertOrder)
        {
            $orderID = $db->insert_id;
            $sql = '';
            
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');";
            }
 
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems)
            {
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }
            else
            {
                header("Location: checkout.php");
            }
        }
        else
        {
            header("Location: checkout.php");
        }
    }
    else
    {
        header("Location: index.php");
    }
}
else
{
    header("Location: index.php");
}