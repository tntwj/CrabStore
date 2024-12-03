<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore";
$templateParams["main-content"] = "template/landing-page-content.php";
$templateParams["logo"] = "./upload/template/crabapple-logo.png";
$templateParams["notify-base"] = "./upload/template/notify-base-icon.png";
$templateParams["notify-active"] = "./upload/template/notify-active-icon.png";
$templateParams["menu"] = "./upload/template/menu-icon.png";
$templateParams["menu-account"] = "./upload/template/user-page-icon.png";
$templateParams["menu-cart"] = "./upload/template/cart-page-icon.png";

require_once("template/base.php");
?>