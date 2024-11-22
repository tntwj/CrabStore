<?php
session_start();
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore";
$templateParams["main-content"] = "template/landing-page-content.php";

require_once("template/base.php");
?>