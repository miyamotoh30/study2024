<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php error_reporting(0);?>
    <header>
        <div class="headerContainer">
            <nav>
                <div class="drawerIcon" id="openBtn">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="headerMenu" id="headerMenu">
                    <div><img src="images/shopLogo.svg" alt="logo"></div>
                    <div class="closeBtnIcon" id="closeBtn">
                        <span class="topbar"></span>
                        <span class="bottombar"></span>
                    </div>
                    <li><a href="index.php">TOP</a></li>
                    <li><a href="allitems.php">商品一覧</a></li>
                    <li><a href="#">よくある質問</a></li>
                    <li><a href="#">問い合わせ</a></li>
                    <li><a href="#">当サイトのポリシー</a></li>
                </ul>
            </nav>
            <p><img src="images/shopLogo.svg" alt="logo"></p>
            <div class="shoppingIcons">
                <ul>
                    <li><a href="loginpage.php"><img src="images/login.svg" alt="login"></a></li>
                    <li><a href="cartpage.php"><img src="images/cart.svg" alt="cart"></a></li>
                </ul>
            </div>
        </div><!--headerContainer-->
        <div class="searchArea">
            <form method="post" action="search.php" class="searchForm">
                <input type="submit" value="" class="searchBtn">
                <input type="text" name="word" class="searchWord">
            </form>
        </div>
    </header>