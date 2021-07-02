<?php

session_start();
include("funcs.php");
loginCheck();

$pdo = db_connect();



include ("mypage_teishutsu.html");

?>