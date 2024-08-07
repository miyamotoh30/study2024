<?php require 'header.php';?>
<main>
    <section class="customerInfoPage">
        <div class="container">
            <h1>会員登録</h1>
            <form action="registration.php" method="post">
                <dl class="formInputList">
                    <dt>お名前<span>（必須）</span></dt>
                    <dd><input type="text" name="customerName" value="ドーナツ太郎"></dd>
                    <dt>お名前（フリガナ）<span>（必須）</span></dt>
                    <dd><input type="text" name="customerNameKana" value="ドーナツタロウ"></dd>
                    <dt>郵便番号<span>（必須）</span></dt>
                    <dd><input type="text" name="postNumber1" value="123">
                        <input type="text" name="postNumber2" value="4567"></dd>
                    <dt>住所<span>（必須）</span></dt>
                    <dd><input type="text" name="address" value="千葉県〇〇市中央1-1-1"></dd>
                    <dt>メールアドレス<span>（必須）</span></dt>
                    <dd><input type="text" name="mailAddress1" value="123@gmail.com"></dd>
                    <dt>メールアドレス確認用<span>（必須）</span></dt>
                    <dd><input type="text" name="mailAddress2" value="123@gmail.com"></dd>
                    <dt>パスワード<span>（必須）</span></dt>
                    <p>半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません
                    </p>
                    <dd><input type="password" name="password1" value="123456abcd"></dd>
                    <dt>パスワード確認用<span>（必須）</span></dt>
                    <dd><input type="password" name="password2" value="123456abcd"></dd>
                </dl>
                <div class="centerPosition"><input type="submit" value="入力確認する" class="submitBtn"></div>
            </form>
        </div><!--container-->
    </section>
</main>
<?php require 'footer.php';?>