<?php session_start();?>
<?php require 'header.php';?>
<main>
    <section class="username">
<?php
    if(!isset($_SESSION['customer'])){
        echo '<p>ようこそ&nbsp;ゲスト様</p>';
    }else{
        echo '<p>ようこそ&nbsp;',$_SESSION['customer']['name'],'様</p>';
    }
?>
    </section>
    <section class="heroImage">
        <div class="container">
            <h1 class="headerHeroImage"><img srcset="images/heroImage.png 320w,images/pcHeroImage.png 1280w"
             src="images/heroImage.png" alt="ccdonuts"></h1>
        </div><!--container-->
    </section>
    <section class="information">
        <article class="newItem">
            <h2><img srcset="images/citrus.png 320w,images/pcNewItem.png 1280w" 
            src="images/citrus.png" alt="newItem"></h2>
            <p class="newBadge">新製品</p>
            <p class="itemname">サマーシトラス</p>
        </article>
        <article class="lifeWithDonuts">
            <h2><img srcset="images/lifeImage.png 320w,images/pcLifeImage.png 1280w" src="images/lifeImage.png" alt="newItem"></h2>
            <p class="title">ドーナツのある生活</p>
        </article>
        <article class="allItems">
            <h2><img srcset="images/allItembaner.png 320w,images/pcAllItembaner.png 1280w"
            src="images/pcAllItembaner.png" alt="newItem"></h2>
            <p class="banerTitle">商品一覧</p>
        </article>
    </section>
    <section class="philosophy">
        <div class="container">
            <div class="backgroundPhoto">
                <h2>Philosophy</h2>
                <h3>私たちの信念</h3>
                <p class="enText">"Creating Connections"</p>
                <p class="jpText">「ドーナツでつながる」</p>
            </div>
        </div><!--container-->
    </section>
    <section class="ranking">
        <h2>人気ランキング</h2>
        <div class="rankingContainer">
            <article>
                <p class="rankingNumber topItem">1</p>
                <h3 class="rankingPhoto"><img srcset="images/ranking01.png 320w,images/pcRanking01.png 1280w" 
                src="images/ranking01.png" alt="ranking01"></h3>
                <p class="rankingItem">CCドーナツ 当店オリジナル（5個入り）</p>
                <p class="price">税込 &nbsp;&nbsp; ￥1,500</p>
                <button class="buyItem">カートに入れる</button>
            </article>
            <article>
                <p class="rankingNumber secondItem">2</p>
                <h3 class="rankingPhoto"><img srcset="images/ranking02.png 320w,images/pcRanking02.png 1280w" 
                src="images/ranking02.png" alt="ranking02"></h3>
                <p class="rankingItem">フルーツドーナツセット（12個入り）</p>
                <p class="price">税込 &nbsp;&nbsp; ￥3,500</p>
                <button class="buyItem">カートに入れる</button>
            </article>
            <article>
                <p class="rankingNumber thirdItem">3</p>
                <h3 class="rankingPhoto"><img srcset="images/ranking03.png 320w,images/pcRanking03.png 1280w" 
                src="images/ranking03.png" alt="ranking03"></h3>
                <p class="rankingItem">フルーツドーナツセット（14個入り）</p>
                <p class="price">税込 &nbsp;&nbsp; ￥4,000</p>
                <button class="buyItem">カートに入れる</button>
            </article>
            <article>
                <p class="rankingNumber">4</p>
                <h3 class="rankingPhoto"><img srcset="images/ranking04.png 320w,images/pcRanking04.png 1280w" 
                src="images/ranking04.png" alt="ranking04"></h3>
                <p class="rankingItem">チョコレートデライト（5個入り）</p>
                <p class="price">税込 &nbsp;&nbsp; ￥1,600</p>
                <button class="buyItem">カートに入れる</button>
            </article>
            <article>
                <p class="rankingNumber">5</p>
                <h3 class="rankingPhoto"><img srcset="images/ranking05.png 320w,images/pcRanking05.png 1280w" 
                src="images/ranking05.png" alt="ranking05"></h3>
                <p class="rankingItem">ベストセレクションボックス（4個入り）</p>
                <p class="price">税込 &nbsp;&nbsp; ￥1,200</p>
                <button class="buyItem">カートに入れる</button>
            </article>
            <article>
                <p class="rankingNumber">6</p>
                <h3 class="rankingPhoto"><img srcset="images/ranking06.png 320w,images/pcRanking06.png 320w" 
                src="images/ranking06.png" alt="ranking06"></h3>
                <p class="rankingItem">ストロベリークラッシュ（5個入り）</p>
                <p class="price">税込 &nbsp;&nbsp; ￥1,800</p>
                <button class="buyItem">カートに入れる</button>
            </article>
        </div><!--rankingContainer-->
    </section>
</main>
<?php require 'footer.php';?>