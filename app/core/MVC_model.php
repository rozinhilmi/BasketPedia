<?php
$absolute_path = realpath($_SERVER["DOCUMENT_ROOT"])."/BasketPedia";
define('BASE_URL','http://localhost/BasketPedia');
$BASE_URL = BASE_URL;

session_start();
require "$absolute_path/app/controller/theme.php";
require "$absolute_path/app/controller/connector_db.php";
require "$absolute_path/app/core/app.php";
require "$absolute_path/app/views/template/header.php";
?>