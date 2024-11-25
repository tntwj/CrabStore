<?php
require_once("bootstrap.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isUserLoggedIn()) {
    header("Location: login.php");
    exit();
}

$templateParams["title"] = "Crabstore - Account Details";
$templateParams["main-content"] = "template/account-details.php";

require_once("template/base.php");
?>