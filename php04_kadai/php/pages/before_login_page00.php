<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ザ・ゲーム・ライオンキング（未ログイン）</title>
    <link rel="stylesheet" href="../../sass_plus_css/styles.css">
</head>
<body>
    
    <div class="page00">
        <div class="page00__global-nav-button js-global-nav-button"><span></span><span></span><span></span></div>
        <nav class="page00__global-nav">
            <div class="page00__global-nav-inner g-nav-inner">
                <ul class="page00__global-nav-login-logout">
                    <li class="page00__global-nav-login"><a href="login.php">ログイン</a></li>
                    <li class="page00__global-nav-logout"><span>ログアウト</span></li>
                </ul>
                <ul class="page00__global-nav-lists js-gnav-lists">
                    <li class="page00__global-nav-item js-lists-of-done">
                        <span class="page00__global-nav-item--translucent">
                            過去にした言動一覧<span class="page00__global-nav-item--txt-small">※ログインで解禁</span>
                        </span>
                    </li>
                    <li class="page00__global-nav-item js-cards-of-having">
                        <span class="page00__global-nav-item--translucent">
                            所持しているカード一覧<span class="page00__global-nav-item--txt-small">※ログインで解禁</span>
                        </span>
                    </li>
                    <li class="page00__global-nav-item js-save-the-data">セーブ</li>
                    <li class="page00__global-nav-item js-return-to-start">スタート画面に戻る</li>
                </ul>
            </div>
        </nav>

        <form class="js-form" method="post" action="before_login_page00_insert.php">
            <div class="page00__words-and-deeds">
                <h2 class="page00__words-and-deeds-heading">どんな言動をする？</h2>
                <div class="page00__titile-area">
                    <p class="page00__title-area-heading">【言動のタイトル】</p>
                    <input class="page00__title-area-input js-words-and-deeds-title" name="wd_title" type="text" placeholder="ここに言動のタイトルを入力してください" required="required">
                </div>
                <div class="page00__card-choice">
                    <p class="page00__card-choice-heading">【使用するカード】</p>
                    <ul class="page00__cards">
                        <!-- ※以下のdata-savekeyとidはlocalStorageを使う際につけた名残り。phpでは使用しない。 -->
                        <li>
                            <input class="page00__card js-words-and-deeds-cards" type="checkbox" name="wd_cards[]" value="男フォルダに入れ" data-savekey="男フォルダに入れ" id="男フォルダに入れ" onchange="change()">
                            <span>男フォルダに入れ</span>
                        </li>
                        <li>
                            <input class="page00__card js-words-and-deeds-cards" type="checkbox" name="wd_cards[]" value="うまくいじって上下関係を築け" data-savekey="うまくいじって上下関係を築け" id="うまくいじって上下関係を築け" onchange="change()">
                            <span>うまくいじって上下関係を築け</span>
                        </li>
                        <li>
                            <input class="page00__card js-words-and-deeds-cards" type="checkbox" name="wd_cards[]" value="タイムコンストレインメソッド" data-savekey="タイムコンストレインメソッド" id="タイムコンストレインメソッド" onchange="change()">
                            <span>タイムコンストレインメソッド</span>
                        </li>
                        <li>
                            <input class="page00__card js-words-and-deeds-cards" type="checkbox" name="wd_cards[]" value="Cフェーズ" data-savekey="Cフェーズ" id="Cフェーズ" onchange="change()">
                            <span>Cフェーズ</span>
                        </li>
                        <li>
                            <input class="page00__card js-words-and-deeds-cards" type="checkbox" name="wd_cards[]" value="恋愛遍歴の話を引き出せ" data-savekey="恋愛遍歴の話を引き出せ" id="恋愛遍歴の話を引き出せ" onchange="change()">
                            <span>恋愛遍歴の話を引き出せ</span>
                        </li>
                    </ul>
                </div>           
                <div class="page00__entry">
                    <p class="page00__entry-heading">【カードをもとに言動を入力】</p>
                    <textarea class="page00__entry-textarea js-words-and-deeds-text" name="wd_text" placeholder="ここに言動を入力してください" required="required"></textarea>
                </div>
                <div class="page00__confirm-button-area">
                    <button class="page00__confirm-button js-button" type="submit" disabled>確定</button>
                </div>
            </div>
        </form>
        
        <div class="page00__inner">
            <canvas class="page00__canvas" id="canvas"></canvas>
        </div>
        <div class="page00__next-step-button-area">
            <button class="page00__display-choices-button js-display-choices-button">言動の入力に進む</button>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="../../js/pages/before_login_page00.js"></script>
</body>
</html>