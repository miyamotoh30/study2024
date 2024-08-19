<?php session_start();?>
<?php require 'header.php';?>
<main>
    <div class="breadclumb">
        <p><a href="index.php">Top</a> > 商品一覧 </p>
    </div>
<?php
    if(!isset($_SESSION['customer'])){
        echo '<p>ようこそ&nbsp;ゲスト様</p>';
    }else{
        echo '<p>ようこそ&nbsp;',$_SESSION['customer']['name'],'様</p>';
    }
    /*商品情報をDBから取得 */
    $pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8','ccStaff','ccDonuts');
    $sql = $pdo->prepare('select * from products where id=?');
    if(isset($_REQUEST['id'])){
        $sql->execute([htmlspecialchars($_REQUEST['id'])]);
    }
    foreach($sql as $row){
        echo '<div class="container flexBox">';
        echo '<div class="photoBlock">';
        echo '<h1 class="headerPhoto"><img src="images/',$row['id'],'donuts.png" alt="',$row['name'],'"></h1>';
        echo '</div>';
        echo '<div class="descriptionBlock">';
        echo '<h2>',$row['name'],'</h2>';
        echo '<p class="description">';
        echo $row['introduction'];
        echo '</p>';
        echo '<p class="price">税込 &nbsp;&nbsp; ￥',$row['price'],'</p>';
        echo '<form method="post" action="insertitem.php">';
        echo '<div class="formLayout">';
        echo '<p><select name="count" class="count">';
        for($i=1;$i<=10;$i++){
            echo '<option value="',$i,'">',$i,'</option>';
        }
        echo '</select>個</p>';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo '<input type="hidden" name="name" value="',$row['name'],'">';
        echo '<input type="hidden" name="price" value="',$row['price'],'">';
        echo '<input type="submit" value="カートに入れる" class="buyItem detailPageBtn">';
        echo '</form>';
        echo '<button name="favorite" class="favorite">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" fill="#BF0000" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
            </button>';
        echo '</div><!-- formLayout -->
                </div><!--descriptionBlock-->
                </div><!--container-->';
    }/* foreach*/
?>
</main>
<?php require 'footer.php';?>