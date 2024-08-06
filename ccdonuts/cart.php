<?php require 'header.php';?>
<main>
    <div class="breadclumb">
        <p><a href="index.php">Top</a> > 商品一覧 </p>
    </div>
    <div class="username">
        <p>ようこそ&nbsp;ドーナッツ太郎様</p>
    </div>
    <div class="container">
        <section class="totalInformation itemCenter">
            <p>現在&nbsp;&nbsp;商品2点</p>
            <p>ご注文小計：税込&nbsp;<span class="fontsRed">¥5,000</span></p>
            <button class="confirmationBtn">購入確認へ進む</button>
        </section>
        <section>
            <article class="cartItem flexBox">
                <div class="itemPhoto">
                    <h2 class="headerPhoto cartPageSize"><img src="images/ccdonuts.png" alt="ccdonuts"></h1>
                </div>
                <div class="itemInformation itemCenter">
                    <h3>CCドーナツ 当店オリジナル（5個入り）</h3>
                    <div class="flexBox">
                        <p class="price">税込 &nbsp;&nbsp; ￥1,500</p>
                        <div class="cartForm">
                            <p class="count fontBold">数量<input type="text" name="count" value="1">個</p>
                            <button class="recalcBtn">再計算</button>
                            <p class="deleteLink"><a href="cart.php">削除する</a></p>
                        </div>
                    </div>
                </div>
            </article><!--flexBox-->
            <article class="cartItem flexBox">
                <div class="itemPhoto">
                    <h2 class="headerPhoto cartPageSize"><img src="images/pcFruitsDonuts12.png" alt="FruitsDonutsSet"></h2>
                </div>
                <div class="itemInformation itemCenter">
                    <h3>フルーツドーナツセット（12個入り）</h3>
                    <div class="flexBox">
                        <p class="price">税込&nbsp;&nbsp;￥3,500</p>
                        <div class="cartForm">
                            <p class="count fontBold">数量<input type="text" name="count" value="1">個</p>
                            <button class="recalcBtn">再計算</button>
                            <p class="deleteLink"><a href="cart.php">削除する</a></p>
                        </div>
                    </div>
                </div><!--itemInformation-->
            </article><!--flexBox-->
        </section>
        <section class="totalInformation itemCenter">
            <p>現在&nbsp;&nbsp;商品2点</p>
            <p>ご注文小計：税込&nbsp;<span class="fontsRed">¥5,000</span></p>
            <button class="confirmationBtn">購入確認へ進む</button>
        </section>
    </div><!--container-->
</main>
<?php require 'footer.php';?>