$('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
 });


 // ログインするかどうかの確認＆ログイン成功時・失敗時の挙動の予告
$(document).on('click', '.js-login-button', function() {
	if( confirm('ログインしますか？（ログイン成功時はログイン後のゲーム画面へ、ログイン失敗時は現在の画面に戻ります）') ){
	} else {
		return false;
	}
});