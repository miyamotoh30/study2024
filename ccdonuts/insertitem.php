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
?>
<?php require('cart.php');?>
