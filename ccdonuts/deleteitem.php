<?php session_start();?>
<?php
    if(isset($_REQUEST['id'])){
        $id=htmlspecialchars($_REQUEST['id']);
        unset($_SESSION['product'][$id]);
    }
    $totalcount=0;
    $totalprice=0;
    foreach($_SESSION['product'] as $num => $product){
        $totalcount = $totalcount + $product['count'];
        $totalprice = $totalprice + ($product['count']*$product['price']); 
    }
    $_SESSION['totalcount'] = $totalcount;
    $_SESSION['totalprice'] = $totalprice;

?>
<?php require('cart.php');?>