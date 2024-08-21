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
    <link rel="stylesheet" href="styles/items.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/customer.css">
</head>
<body>
    <header>
        <div class="headerContainer">
            <nav>
                <div class="drawerIcon">
                    <span class="bar">
                    <span class="bar">
                    <span class="bar">
                </div>
                <ul class="headerMenu">
                    <li><a href="index.php">TOP</a></li>
                    <li><a href="allitem.php">商品一覧</a></li>
                    <li><a href="faq.php">よくある質問</a></li>
                    <li><a href="contact.php">問い合わせ</a></li>
                    <li><a href="policy.php">当サイトのポリシー</a></li>
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