<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isUserLoggedIn()) {
    setFlashMessage("Please login to view your notifications.");
    header("Location: login.php");
    exit();
}

// Could check if the customer_email is set.

$templateParams["title"] = "Crabstore - Notifications";
$templateParams["main-content"] = "template/customer-notifications.php";
$templateParams["notifications"] = $dbh->getUserNotifications($_SESSION[SessionKey::CUSTOMER_EMAIL]);

require_once("template/base.php");
?>