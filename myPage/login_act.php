<?php   
session_start();
$lid    = $_POST["lid"];
$lpw    = $_POST["lpw"];

//1.接続
try {
    $pdo = new PDO('mysql:dbname=HoteList;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
      exit('データベースに接続できませんでした。'.$e->getMessage());
    }

//2.登録 
$sql = "SELECT * FROM a_login WHERE u_id=:lid AND u_pw=:lpw";   
$stmt = $pdo->prepare($sql);
$stmt ->bindValue(':lid', $lid);
$stmt ->bindValue(':lpw', $lpw);
$status = $stmt->execute();


if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} 

//3. 抽出データ数を取得
$val = $stmt->fetch();

//4. 該当レコードがあればSESSIONに値を代入
if ($val["id"] !=""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["u_name"] = $val['u_name'];
    //Login処理OKの場合select.phpへ移動
    header("Location: mypage.php");
}else{
    //Login処理NGの場合login.phpへ移動
    header("Location: login.php");
}
//処理終了
exit();

?>