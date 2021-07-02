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
      <a href="login.php"><img class="logo_img" src="image/logo.gif"></a>
    </h1>
    <ul class="nav-list">
      <li class="nav-list-item">Map</li>
      <li class="nav-list-item">List</li>
      <li class="nav-list-item">User</li>
      <li class="nav-list-item">Blog</li>
    </ul>
    <ul class="nav-list2">
      <li class="nav-icon"><a href="mypage.php"><img class="icon01" src="image/icon01.png"></a></li>
      <li></li>
      <li></li>
    </ul>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>アカウント情報</legend>
     <label>お名前：<input class="inputColumn" type="text" placeholder="Name" name="name"></label><br>
     <label>アカウント名：<input class="inputColumn"type="text" placeholder="Account Name" name="l_id"></label><br>
     <label>パスワード：<input class="inputColumn"type="text" placeholder="Password" name="password"></label><br>
     <!-- <label>生年月日：<input class="inputColumn"type="text" placeholder="Date of Birth" name="date_bt"></label><br> -->
     <label>Email：<input class="inputColumn"type="text" placeholder="Email" name="email"></label><br>
     <label>性別：<input class="inputColumn"type="text" placeholder="Male/Female/None" name="sex"></label><br>
     <label>お住まいのエリア：<input class="inputColumn"type="text" placeholder="Location" name="location"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>