<?php
session_start();
require_once('funcs.php');
loginCheck();


//1. POSTデータ取得
$wd_title     = $_POST['wd_title'];
$wd_cards     = $_POST['wd_cards'];
$wd_cards_csv = implode(',', $wd_cards);
$wd_text      = $_POST['wd_text'];


//2. DB接続します（funcs.phpで関数化したものを用いる）
$pdo = db_conn();


//３．データ登録SQL作成
// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO
                      words_and_deeds_table(wd_id, wd_title, wd_cards, wd_text, date)
                      VALUES
                      (NULL, :wd_title, :wd_cards_csv, :wd_text, sysdate())");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
// フォームから取得した値（$name、$emailなど）を、「PDO::PARAM_STR」というルールで処理してから「:name」に入れましょう、という指示。：の後はなんでもよく、「:komekomeclub」とかでもOK!
$stmt->bindValue(':wd_title', $wd_title, PDO::PARAM_STR);
$stmt->bindValue(':wd_cards_csv', $wd_cards_csv, PDO::PARAM_STR);
$stmt->bindValue(':wd_text', $wd_text, PDO::PARAM_STR);
//  3. 実行
$status = $stmt->execute();


//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクトを取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．page00.phpへリダイレクト
  header('Location: page00.php');
}
?>
