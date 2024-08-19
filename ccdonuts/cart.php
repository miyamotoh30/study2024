<?php require 'header.php';?>
<main>
    <div class="breadclumb">
        <p><a href="index.php">Top</a> > カート </p>
    </div>
<?php
    if(!isset($_SESSION['customer'])){
        echo '<p>ようこそ&nbsp;ゲスト様</p>';
    }else{
        echo '<p>ようこそ&nbsp;',$_SESSION['customer']['name'],'様</p>';
    }
?>
    <div class="container">
        <section class="totalInformation itemCenter">
<?php
    if(isset($_SESSION['totalcount'])&&isset($_SESSION['totalprice'])){
            echo '<p>現在&nbsp;&nbsp;商品',$_SESSION['totalcount'],'点</p>';
            echo '<p>ご注文小計：税込&nbsp;<span class="fontsRed">¥',$_SESSION['totalprice'],'</span></p>';
            echo '<button class="confirmationBtn">購入確認へ進む</button>';
    }
?>
        </section>
<?php
        echo '<section>';
        if(!empty($_SESSION['product'])){
            foreach($_SESSION['product'] as $id=>$product){
                echo '<article class="cartItem flexBox">';
                echo '<div class="itemPhoto">';
                echo '<h2 class="headerPhoto cartPageSize"><img src="images/',$id,'donuts.png" alt="',$product['name'],'"></h2>';
                echo '</div>';
                echo '<div class="itemInformation itemCenter">';
                echo '<h3>',$product['name'],'</h3>';
                echo '<div class="flexBox">';
                echo '<p class="price">税込 &nbsp;&nbsp; ￥',$product['price'],'</p>';
                echo '<div class="cartForm">';
                echo '<p class="count fontBold">数量<input type="text" name="count" value="',$product['count'],'">個</p>';
                echo '<button class="recalcBtn">再計算</button>';
                echo '<p class="deleteLink"><a href="deleteitem.php?id=',$id,'">削除する</a></p>';
                echo '</div><!-- cartForm -->';
                echo '</div><!-- flexBox -->';
                echo '</div><!--itemInformation-->';
                echo '</article><!--flexBox-->';
            }
        }else{
            echo '<p>カートにアイテムがありません。</p>';
        }
        echo '</section>';
?>
        <section class="totalInformation itemCenter">
<?php
    if(isset($_SESSION['totalcount'])&&isset($_SESSION['totalprice'])){
            echo '<p>現在&nbsp;&nbsp;商品',$_SESSION['totalcount'],'点</p>';
            echo '<p>ご注文小計：税込&nbsp;<span class="fontsRed">¥',$_SESSION['totalprice'],'</span></p>';
            echo '<button class="confirmationBtn">購入確認へ進む</button>';
    }
?>
        </section>
    </div><!--container-->
</main>
<?php require 'footer.php';?>