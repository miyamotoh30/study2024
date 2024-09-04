<?php require 'header.php';?>
<main>
<?php require 'customername.php';?>
<?php
    echo '<div class="container">';
    $totalCount = 0;
    $totalPrice = 0;
    $items = [];
    if(!empty($_SESSION['product'])){
        foreach($_SESSION['product'] as $id=>$product){
            /*先に商品数が更新されていないか確認し、更新がかかっていた場合は配列productを更新する */
            if(isset($_REQUEST['recalc'])&&isset($_REQUEST['id'])&&$_REQUEST['id']==$id){
                $_SESSION['product'][$id]['count']=$_REQUEST['recalc'];/*再計算の値をSESSIONに格納 */
                $product['count'] = $_REQUEST['recalc'];/* 配列productの値を更新 */
            }
            /* 合計数と合計金額を計算する*/
            $totalCount=$totalCount+$product['count'];
            $totalPrice=$totalPrice+$product['count']*$product['price'];
            /* 商品情報を表示するためのStringを生成する */
            $str = '<section>';
            $str .= '<article class="cartItem flexBox">';
            $str .= '<div class="itemPhoto">';
            $str .= '<h2 class="headerPhoto cartPageSize"><img src="images/'.$id.'donuts.png" alt="'.$product['name'].'"></h2>';
            $str .= '</div>';
            $str .= '<div class="itemInformation itemCenter">';
            $str .= '<h3>'.$product['name'].'</h3>';
            $str .= '<div class="flexBox">';
            $str .= '<p class="price">税込 &nbsp;&nbsp; ￥'.$product['price'].'</p>';
            $str .= '<form class="cartForm" action="cartpage.php" method="post">';
            $str .= '<p class="itemcount fontBold">数量<select class="count" name="recalc">';
            for($i=1;$i<=10;$i++){
                if($i === $product['count']){
                    $str.= '<option value="'.$i.'" selected>'.$i.'</option>';
                }else{
                    $str.= '<option value="'.$i.'">'.$i.'</option>';
                }
            }
            $str .= '</select>個</p>';
            $str .= '<input type="hidden" name="id" value="'.$id.'">';
            $str .= '<input type="submit" class="recalcBtn" value="再計算">';
            $str .= '<p class="deleteLink"><a href="deleteitem.php?id='.$id.'">削除する</a></p>';
            $str .= '</form><!-- cartForm -->';
            $str .= '</div><!-- flexBox -->';
            $str .= '</div><!--itemInformation-->';
            $str .= '</article><!--flexBox-->';
            $str .= '</section>';
            $items[] = $str;/* 配列の末尾にStringを追加 */
        }
        /* 合計金額と合計数のhtmlを作成する */
        $totalString;
        if($totalCount!==0 && $totalPrice!==0){
            $totalString = '<section class="totalInformation itemCenter">';
            $totalString .= '<p>現在&nbsp;&nbsp;商品'.$totalCount.'点</p>';
            $totalString .= '<p>ご注文小計：税込&nbsp;<span class="fontsRed">¥'.$totalPrice.'</span></p>';
            $totalString .= '<div class="confirmationBtn"><a href="purcheconfilm.php">購入確認へ進む</a></div>';
            $totalString .= '</section>';
        }

        /* 表示する画面を出力 */
        echo $totalString;/* 商品欄の前の合計表示 */
        foreach($items as $item){
            echo $item;/* 商品欄を出力 */
        }
        echo $totalString;/* 商品欄の後の合計表示 */

    }else{
        echo '<section class="totalInformation itemCenter">';
        echo '<p>カートにアイテムがありません。</p>';
        echo '</section>';
    }
    echo '</div><!--container-->';
?>
 </main>
<?php require 'footer.php';?>