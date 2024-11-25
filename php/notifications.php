<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isUserLoggedIn()) {
    header("Location: login.php");
    exit();
}

$templateParams["title"] = "Crabstore - Notifications";
$templateParams["main-content"] = "template/customer-notifications.php";
$templateParams["notifications"] = $dbh->getUserNotifications("jane.smith@example.com");

require_once("template/base.php");
?>