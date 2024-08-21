<?php session_start();?>
<?php require 'header.php';?>
<main>
<?php
if(isset($_SESSION['customer'])){
    $pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8','ccStaff','ccDonuts');
    $sql = $pdo->prepare('select * from customers where mail=?');
    $sql->execute([$_SESSION['customer']['mailAddress']]);
    if(!empty($sql->fetchAll())){
        echo '<p>メールアドレスは登録済みです。</p>';
        unset($_SESSION['customer']);
    }else{
        $sql=$pdo->prepare('insert into customers values(null,?,?,?,?,?,?,?)');
        $sql->execute([
            $_SESSION['customer']['name'],
            $_SESSION['customer']['namekana'],
            $_SESSION['customer']['postnumber1'],
            $_SESSION['customer']['postnumber2'],
            $_SESSION['customer']['address'],
            $_SESSION['customer']['mailAddress'],
            $_SESSION['customer']['password']
        ]);
        require 'customername.php';
        /*登録完了画面を表示する */
        echo '<section class="loginResultPage">';
        echo '<h1>会員登録完了</h1>';
        echo '<div class="resultTextBox">';
        echo '<p>会員登録が完了しました。</p>';
        echo '<p>ログインページへお進みください。</p>';
        echo '</div>';
        echo '<p class="linkAddress"><a href="#">クレジットカード登録へすすむ</a></p>';
        echo '<p class="linkAddress"><a href="#">購入確認ページへすすむ</a></p>';
        echo '</section>';
    }
}else{
    echo '<div class="resultTextBox">';
    echo '<p>登録に失敗しました</p>';
    echo '</div>';
    echo '<p class="linkAddress"><a href="customerinformation.php">会員登録にもどる</a></p>';
    echo '<p class="linkAddress"><a href="index.php">topにもどる</a></p>';
}

?>
</main>
<?php require 'footer.php';?>