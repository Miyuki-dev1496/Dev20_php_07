<?php

//login確認
function loginCheck(){
    if ( !isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
        echo "LOGIN Error!";
        exit();
    } else {
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
        // echo $_SESSION["chk_ssid"];
    }
}

//db接続
function db_connect(){
    try {
        $pdo = new PDO('mysql:dbname=HoteList;charset=utf8;host=localhost','root','root');
        } catch (PDOException $e) {
          exit('データベースに接続できませんでした。'.$e->getMessage());
        }
        return $pdo;    
}

//データ登録SQL作成
// function sql(){
//     $stmt = $pdo->prepare("SELECT * FROM a_login");
//     return $stmt;

// }

//session id


?>