<?php
session_start();
require_once('funcs.php');
loginCheck();


//1. POSTデータ取得
$wd_id = $_GET['wd_id'];


//2. DB接続します（funcs.phpで関数化したものを用いる）
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM words_and_deeds_table WHERE wd_id = :wd_id;');
$stmt->bindValue(':wd_id', $wd_id, PDO::PARAM_INT); //PARAM_INTなので注意
$status = $stmt->execute(); //実行


//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: page00.php');
    exit();
}
