<?php require 'header.php';?>
<main>
    <div class="breadclumb">
        <p><a href="index.php">Top</a> > 商品一覧 </p>
    </div>
    <div class="username">
        <p>ようこそ&nbsp;ゲスト様</p>
    </div>
    <div class="container flexBox">
        <div class="photoBlock">
            <h1 class="headerPhoto"><img src="images/ccdonuts.png" alt="ccdonuts"></h1>
        </div>
        <div class="descriptionBlock">
            <h2>CCドーナツ 当店オリジナル（5個入り）</h2>
            <p class="description">
                当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。
                素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。
                一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。
            </p>
            <p class="price">税込 &nbsp;&nbsp; ￥1,500</p>
            <form method="post" action="cart.php">
                <div class="formLayout">
                    <p class="count"><input type="text" name="count">個</p>
                    <input type="submit" value="カートに入れる" class="buyItem detailPageBtn">
                    <button name="favorite" class="favorite">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" fill="#BF0000" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div><!--descriptionBlock-->
    </div><!--container-->
</main>
<?php require 'footer.php';?>