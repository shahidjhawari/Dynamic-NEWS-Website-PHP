<?php
session_start();
$con=mysqli_connect("localhost","root","","news_website");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/news_website/');
define('SITE_PATH','http://127.0.0.1/news_website/');
?>