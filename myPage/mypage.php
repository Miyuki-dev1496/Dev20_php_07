<?php
session_start();
include("funcs.php");
loginCheck();

$pdo = db_connect();
$stmt = $pdo->prepare("SELECT * FROM a_login");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>My Page</title>
    <link rel="resetcss" href="css/reset.css">
   <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
   <!-- jsFiddle will insert css and js -->
   <link rel="stylesheet" href="css/style02.css">
   <link rel="stylesheet" href="css/main.css">
   <script src="js/mapAPI.js"></script>
   
</head>
<body>

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
      <li class="nav-icon"><img class="icon01" src="image/icon01.png"></li>
      <li></li>
      <li></li>
    </ul>
</header>


<main>

<div class="account_wrapper"> 
  <div class="account">
      <img class="img" src="ac_img.png" width=60px>
      <p id="username">Nieve</p>
      <!-- <?php  
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $view .= "<p>";
        $view .= $result["u_id"];
        $view .= "</p>";
      
      ?> -->
  </div>   
  <div><a href="http://localhost:8888/htdocs/myPage/u_view.php?id=1"><img class="img02" src="image/icon02.png" width=35px></a></div>
 
  <h1 class="text-center">My Hotels List</h1>
</div>


    <div id="mapid">
        <!-- google map api-->
        <div class="hotel-search">
            <div id="findhotels">Find hotels in:</div>
      
            <div id="locationField">
              <input id="autocomplete" placeholder="Enter a city" type="text" />
            </div>
      
            <div id="controls">
              <select id="country">
                <option value="all">All</option>
                <option value="au">Australia</option>
                <option value="br">Brazil</option>
                <option value="ca">Canada</option>
                <option value="fr">France</option>
                <option value="de">Germany</option>
                <option value="mx">Mexico</option>
                <option value="nz">New Zealand</option>
                <option value="it">Italy</option>
                <option value="za">South Africa</option>
                <option value="es">Spain</option>
                <option value="pt">Portugal</option>
                <option value="us" selected>U.S.A.</option>
                <option value="uk">United Kingdom</option>
              </select>
            </div>
        </div>
      
        <div id="map"></div>
      
        <div id="listing">
            <table id="resultsTable">
              <tbody id="results"></tbody>
            </table>
        </div>
      
        <div style="display: none">
            <div id="info-content">
              <table>
                <tr id="iw-url-row" class="iw_table_row">
                  <td id="iw-icon" class="iw_table_icon"></td>
                  <td id="iw-url"></td>
                </tr>
                <tr id="iw-address-row" class="iw_table_row">
                  <td class="iw_attribute_name">Address:</td>
                  <td id="iw-address"></td>
                </tr>
                <tr id="iw-phone-row" class="iw_table_row">
                  <td class="iw_attribute_name">Telephone:</td>
                  <td id="iw-phone"></td>
                </tr>
                <tr id="iw-rating-row" class="iw_table_row">
                  <td class="iw_attribute_name">Rating:</td>
                  <td id="iw-rating"></td>
                </tr>
                <tr id="iw-website-row" class="iw_table_row">
                  <td class="iw_attribute_name">Website:</td>
                  <td id="iw-website"></td>
                </tr>
              </table>
            </div>
        </div>
    </div>
    
    <!-- Google Map API -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key="
      async
    ></script>

    <!-- 入力画面-->
    <div class="column_wrapper container">

      <form action="mypageData.php" method="post">
      
        <div class="column">
            <p>Date</p>
            <input type="date" name="date" id="date" cols="40" rows="1">
        </div>     

        <div class="column">
            <p>ホテル名</p>
            <textarea name="hotelname" id="hotel" cols="40" rows="1"></textarea>
        </div>

        <div class="column">
            <p>Link</p>
            <input type=ul name="link" id="link" width="600px" rows="1">
        </div>

        <div class="column">
            <p>感想</p>
            <textarea name="comment" id="comment" cols="40" rows="10"></textarea>
        </div>

        <div class="column">
            <p>レート</p>
            
            <p name="rate" id="rate" cols="40" rows="1"></p>
        </div>

        <div>
        <!-- 送信ボタン -->
        <input type="submit" id="send" class="btn">
        </div>

        </form>

    </div> 


   <div id="output_wrapper">
    <!-- 保存されたデータが表示される箇所 -->
    <!-- <ul>
        <li id="output_draft">
            <p class="date">2021.5.12</p> 
            <p class="hotelname">k5</p>
            <p class="raterecord"></p>
            <iframe width="380" heifht="200" src="https://k5-tokyo.com/">https://k5-tokyo.com/</iframe>
            <p class="commentbox"></p>
        </li>
    </ul> -->
    <ul>
        <li id="output">
           

        </li>
    </ul>
   
   </div>
</main> 

    <!--// JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--//  JQuery -->

    <script src="https://www.gstatic.com/firebasejs/8.6.2/firebase.js"></script>

   
   <!-- Raty library-->>
   <script type="text/javascript" src="./js/jquery.raty.js"></script>
   <script type="text/javascript" src="./js/mypage.js"></script>

 


    
</body>
</html>