<?php session_start();?>
<?php require 'header.php';?>
<main>
    <section class="registrationPage">
        <div class="container">
            <h1>入力確認</h1>
            <form action="confilm.php" method="post">
                <dl class="formInputList">
<?php
if(!isset($_REQUEST['customerName'])||!isset($_REQUEST['customerNameKane'])||!isset($_REQUEST['address'])){
    echo '<p>必須項目に未入力のものがあります。</p>';
}else if(!preg_match('/^[0-9]{3}$/',$_REQUEST['postNumber1'])||!preg_match('/^[0-9]{4}$/',$_REQUEST['postNumber2'])){
    echo '<p>郵便番号が不正な値になっています。</p>';
}else if(!preg_match('/^[a-zA-Z0-9_+.]{1,}@[a-zA-Z0-9_+.]{1,}$/',$_REQUEST['mailAddress1'])||!preg_match('/^[a-zA-Z0-9_+.]{1,}@[a-zA-Z0-9_+.]{1,}$/',$_REQUEST['mailAddress2'])){
    echo '<p>メールアドレスが正しくありません</p>';
}else if($_REQUEST['mailAddress1']!=$_REQUEST['mailAddress2']){
    echo '<p>メールアドレスが一致しません</p>';
}else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,20}$/',$_REQUEST['password1'])||!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9]{8,20}$/',$_REQUEST['password2'])){
    echo '<p>パスワードが条件を満たしていません</p>';
}else if($_REQUEST['password1']!=$_REQUEST['password2']){
    echo '<p>パスワードが一致していません。</p>';
}else{

    $name = htmlspecialchars($_REQUEST['customerName']);
    $namekana = htmlspecialchars($_REQUEST['customerNameKana']);
    if(preg_match('/^[0-9]{3}$/',$_REQUEST['postNumber1'])&&preg_match('/^[0-9]{4}$/',$_REQUEST['postNumber2'])){
        $postnumber1 = $_REQUEST['postNumber1'];
        $postnumber2 = $_REQUEST['postNumber2'];
    }
    $address = htmlspecialchars($_REQUEST['address']);
    $mailAddress1=htmlspecialchars($_REQUEST['mailAddress1']);
    $mailAddress2=htmlspecialchars($_REQUEST['mailAddress2']);
    $password1=htmlspecialchars($_REQUEST['password1']);
    $password2=htmlspecialchars($_REQUEST['password2']);
    echo '<dt>お名前</dt>';
    echo '<dd><p>' , $name , '</p></dd>';
    echo '<dt>お名前（フリガナ）</dt>';
    echo '<dd><p>', $namekana ,'</p></dd>';
    echo '<dt>郵便番号</dt>';
    echo '<dd><p>',$postnumber1,$postnumber2,'</p></dd>';
    echo '<dt>住所</dt>';
    echo '<dd><p>',$address,'</p></dd>';
    echo '<dt>メールアドレス</dt>';
    echo '<dd><p>',$mailAddress1,'</p></dd>';
    echo '<dt>メールアドレス確認用</dt>';
    echo '<dd><p>',$mailAddress2,'</p></dd>';
    echo '<dt>パスワード</dt>';
    echo '<dd><p>',$password1,'</p></dd>';
    echo '<dt>パスワード確認用</dt>';
    echo '<dd><p>',$password2,'</p></dd>';
    //セッションにデータを登録する
    unset($_SESSION['customer']);
    $_SESSION['customer']=[
        'name'=>$name,
        'namekana'=>$namekana,
        'postnumber1'=>$postnumber1,
        'postnumber2'=>$postnumber2,
        'address'=>$address,
        'mailAddress'=>$mailAddress1,
        'password'=>$password1
    ];
}
?>
                </dl>
                <div class="centerPosition"><input type="submit" value="登録する" class="submitBtn"></div>
            </form>
        </div>
    </section>
</main>
<?php require 'footer.php';?>