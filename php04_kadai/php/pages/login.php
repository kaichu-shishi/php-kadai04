<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="../../sass_plus_css/styles.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form">
                <input type="text" placeholder="ユーザーネーム"/>
                <input type="password" placeholder="パスワード"/>
                <input type="text" placeholder="Eメールアドレス"/>
                <button>アカウント作成</button>
                <p class="message">すでにアカウントを持っていますか？<br><a href="#">ログインはこちらから</a></p>
                <p class="return-wrapper"><a class="return" href="before_login_page00.php">＜ 登録・ログインせずに戻る</a></p>
            </form>
            <form class="login-form" action="login_act.php" method="post">
                <input type="text" name="lid" placeholder="ユーザーネーム"/>
                <input type="password" name="lpw" placeholder="パスワード"/>
                <input class="login-button js-login-button" type="submit" value="ログイン">
                <p class="message">登録はお済みですか？<br><a href="#">こちらからアカウント作成できます</a></p>
                <p class="return-wrapper"><a class="return" href="before_login_page00.php">＜ 登録・ログインせずに戻る</a></p>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="../../js/pages/login.js"></script>
</body>
</html>