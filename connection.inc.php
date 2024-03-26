<?php
session_start();
$con=mysqli_connect("localhost","root","","news_website");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/news_website/');
define('SITE_PATH','http://127.0.0.1/news_website/');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/news_images/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/news_images/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/news_multi_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/news_multi_images/');
?>