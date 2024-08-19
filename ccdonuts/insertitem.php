<?php session_start();?>
<?php
    $id=htmlspecialchars($_REQUEST['id']);
    if(!isset($_SESSION['product'])){
        $_SESSION['product']=[];
    }
    $count=0;
    if(isset($_SESSION['product'][$id])){
        $count=$_SESSION['product'][$id]['count'];
    }
    $_SESSION['product'][$id]=[
        'name'=>$_REQUEST['name'],
        'price'=>$_REQUEST['price'],
        'count'=>$count+$_REQUEST['count']
    ];
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
