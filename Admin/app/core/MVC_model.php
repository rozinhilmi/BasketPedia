<?php
session_start();
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/BasketPedia/Admin";
$header_path = "http://localhost/BasketPedia/Admin";

require "$absolute_path/app/controller/connector_db.php";
require "$absolute_path/app/core/app.php";
if($page->controller != "Login.php"){
  if (!isset($_SESSION['session'])){
    header("Location: $header_path/Public/Login");
  } 
}
require "$absolute_path/app/view/header.php";
?>