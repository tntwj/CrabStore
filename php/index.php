<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$templateParams["title"] = "Crabstore";
$templateParams["main-content"] = "template/landing-page-content.php";

require_once("template/base.php");
?>