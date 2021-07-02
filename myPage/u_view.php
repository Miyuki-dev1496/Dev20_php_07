<?php

//　step1. GETを使って送られたIDを取得
// この場合は$_GET['id'];を使います。

$id = $_GET['id'];

// var_dump($id);

// step2. DB接続します xxxにDB名を入力する

try {
  $pdo = new PDO('mysql:dbname=HoteList;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

// step3 IDをもとに、sqlを準備します。
$sql = "SELECT * FROM a_login WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //idは数値なのでINT
$status = $stmt->execute();
//pdoはデータベースの塊（便利な機能が全部はいっています）それにアクセスするにはアロー関数で取りに行く

//　step４．データ出力
$view=""; //受け取るための変数を事前に作ります。
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
} else {
    //１データのみ抽出の場合はwhileループで取り出さない(一個しかデータが返ってこないので一レコード取得する)
    $row = $stmt->fetch();
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>登録画面</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/main.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  	<h1 class="headline">
      <a><img class="logo_img" src="image/logo.gif">
    </h1>
    <ul class="nav-list">
      <li class="nav-list-item">Map</li>
      <li class="nav-list-item">List</li>
      <li class="nav-list-item">User</li>
      <li class="nav-list-item">Blog</li>
    </ul>
    <ul class="nav-list2">
      <li class="nav-icon"><img class="icon01" src="image/icon01.png"></li>
      <li></li>
      <li></li>
    </ul>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>アカウント情報更新</legend>
     <label>お名前：<input class="inputColumn" type="text" placeholder="Name" name="name" value="<?=$row["u_name"]?>"></label><br>
     <label>アカウント名：<input class="inputColumn"type="text" placeholder="Account Name" name="l_id" value="<?=$row["u_id"]?>"></label><br>
     <label>パスワード：<input class="inputColumn"type="text" placeholder="Password" name="password" value="<?=$row["u_pw"]?>"></label><br>
     <!-- <label>生年月日：<input class="inputColumn"type="text" placeholder="Date of Birth" name="date_bt"></label><br> -->
     <label>Email：<input class="inputColumn"type="text" placeholder="Email" name="email" value="<?=$row["email"]?>"></label><br>
     <label>性別：<input class="inputColumn"type="text" placeholder="Male/Female/None" name="sex" value="<?=$row["sex"]?>"></label><br>
     <label>お住まいのエリア：<input class="inputColumn"type="text" placeholder="Location" name="location" value="<?=$row["location"]?>"></label><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="更新">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>