<?php session_start();?>
<?php require('header.php');?>
<?php
    if(isset($_SESSION['customer'])){
        /*セッションの情報をすべてリセットする */
        unset($_SESSION['customer']);
        unset($_SESSION['products']);
        unset($_SESSION['totalcount']);
        unset($_SESSION['totalprice']);
        echo '<p>ログアウトしました。</p>';
    }else{
        echo '<p>ログアウトしています。</p>';
    }
?>
<?php require('footer.php');?>