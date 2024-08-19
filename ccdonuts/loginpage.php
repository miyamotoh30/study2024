<?php require 'header.php';?>
<main>
    <section class="loginPage">
    <h1>ログイン</h1>
        <div class="inputForm">
            <form action="loginresult.php" method="post">
                <p>メールアドレス</p>
                <input type="text" name="mail">
                <p>パスワード</p>
                <input type="password" name="password">
                <input type="submit" value="ログインする" class="loginBtn">
            </form>
        </div><!--inputForm-->
        <p class="linkAddress"><a href="customerinformation.php">会員登録はこちら</a></p>
    </section>
    </main>
    <?php require 'footer.php';?>