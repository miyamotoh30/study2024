<?php session_start(); ?>
<?php require 'app/database.php';?>
<?php require 'header.php';?>
<main>
<?php require 'customername.php';?>
<div class="container">
<?php
    if(!empty($_SESSION['customer']) && !empty($_SESSION['product'])){
        echo '<h1>購入確認</h1>';
        echo '<section class="purchedItem">';
        echo '<h2>購入商品</h2>';
        /*購入する商品 */
        $totalCount = 0;
        $totalPrice = 0;
        foreach($_SESSION['product'] as $id=>$product){
            echo '<dl>';
            echo '<dt>商品名</dt><dd>',$product['name'],'</dd>';
            echo '<dt>数量</dt><dd>',$product['count'],'</dd>';
            echo '<dt>金額</dt><dd>',$product['price'],'</dd>';
            echo '</dl>';
            $totalCount = $totalCount + $product['count'];
            $totalPrice = $totalPrice + $product['count']*$product['price'];
        }
        echo '</section>';
        if($totalCount!=0 && $totalPrice!=0){
            echo '<section class="purchedTotalCount">';
            echo '<dl>';
            echo '<dt>合計数量</dt><dd>',$totalCount,'</dd>';
            echo '<dt>合計金額</dt><dd>税込  ￥',$totalPrice,'</dd>';
            echo '</dl>';
            echo '</section>';
        }
        /*データベースから顧客情報を取得 */
        $pdo = new PDO(DBNAME,DBUSER,DBPASSWORD);
        $sql = $pdo->prepare('select * from customers where name = ?');
        $sql->execute([$_SESSION['customer']['name']]);
        foreach($sql as $row){
            echo '<section class="purchedCustomer">';
            echo '<h2>お届け先</h2>';
            echo '<dl>';
            echo '<dt>お名前</dt><dd>',$row['name'],'</dd>';
            echo '<dt>郵便番号</dt><dd>',$row['postcode_a'],'-',$row['postcode_b'],'</dd>';
            echo '<dt>住所</dt><dd>',$row['address'],'</dd>';
            echo '</dl>';
            echo '</section>';
        }
        echo '<section class="purchedCredit">';
        echo '<h2>お支払い方法</h2>';
        echo '<dl>';
        echo '<dt>お支払い</dt><dd>クレジットカード</dd>';
        echo '<dt>ブランド</dt><dd>JCB</dd>';
        echo '</dl>';
        echo '</section>';
        echo '<button class="buyItem">購入を確定する</button>';

    }else{
        $strError;
        if(!isset($_SESSION['customer'])){
            $strError = 'ログインしていません。ログイン後に購入手続きをしてください';
        }else{
            $strError = 'カートが空です。';
        }
        echo '<div class="resultTextBox">';
        echo $strError;
        echo '</div>';
        echo '<p class="linkAddress"><a href="loginpage.php">ログインページへすすむ</a></p>';
        echo '<p class="linkAddress"><a href="index.php">TOPページへもどる</a></p>';
    }
?>
</div>
</main>
<?php require 'footer.php';?>