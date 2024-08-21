<?php session_start();?>
<?php require 'header.php';?>
<main>
<?php require 'customername.php';?>
    <section class="loginResultPage">
<?php
    /*ログイン情報を初期化する*/
    unset($_SESSION['customer']);
    if(!isset($_REQUEST['mail'])||!isset($_REQUEST['password'])){
        echo '<p>メールアドレスもしくはパスワードが未入力です</p>';
    }
    /* DB処理*/
    $pdo = new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8','ccStaff','ccDonuts');
    $sql = $pdo->prepare('select * from customers where mail=? and password=?');
    $sql->execute([$_REQUEST['mail'],$_REQUEST['password']]);
    foreach($sql as $row){
        $_SESSION['customer']=[
            'id'=>$row['id'],
            'name'=>$row['name'],
            'namekana'=>$row['furigana'],
            'postnumber1'=>$row['postcode_a'],
            'postnumber2'=>$row['postcode_b'],
            'address'=>$row['address'],
            'mailAddress'=>$row['mail'],
            'password'=>$row['password']
        ];
    }
    if(isset($_SESSION['customer'])){
        /* ログインに成功したとき*/
        echo '<h1>ログイン完了</h1>';
        echo '<div class="resultTextBox">';
        echo '<p>ログインが完了しました。</p>';
        echo '<p>引き続きお楽しみください。</p>';
        echo '</div>';
        echo '<p class="linkAddress"><a href="#">購入確認ページへすすむ</a></p>';
        echo '<p class="linkAddress"><a href="index.php">TOPページへもどる</a></p>';
    }else{
        /*ログインに失敗したとき */
        echo '<h1>エラー</h1>';
        echo '<div class="resultTextBox">';
        echo '<p>ログインに失敗しました。</p>';
        echo '<p>メールアドレスもしくはパスワードを見直してください。</p>';
        echo '</div>';
        echo '<p class="linkAddress"><a href="loginpage.php">ログインページへもどる</a></p>';
        echo '<p class="linkAddress"><a href="index.php">TOPページへもどる</a></p>';
    }
?>
    </section>
</main>
<?php require 'footer.php';?>