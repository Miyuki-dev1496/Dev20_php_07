<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTELIST LOGIN</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

</head>
<body>
  
  <div class="bg_rgba">
    <p class="text"><img src="image/hotelist01.png" alt="hotelist" title="hotelist"> </p>

    <div class="login-modal-wrapper" id="login-modal">
    <div class="modal">
      <div id="login-form">
      <form method="post" action="login_act.php">
            <li><input class="form-control" type="text" placeholder="ID" name="lid"></li>
            <li><input class="form-control" type="password" placeholder="Password" name="lpw"></li>
            <input type="submit" id="submit-btn" value="LOGIN">
        </form>
      </div>
    </div>
    </div>

    <div>
           <form method="post">
            <div>
              <fieldset class="login">
              <input id="login-show"  value="LOGIN">
              <p>新規登録の方は<a href="signup.php">こちら</a></p>
              </fieldset>
              </div>
            </form>
            
    </div>
   
    <script src="js/script.js"></script>
</body>
</html>