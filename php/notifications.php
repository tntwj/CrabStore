<?php
require_once("bootstrap.php");

if (!isUserLoggedIn()) {
    setFlashMessage("Please login to view your notifications.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}

// Could check if the customer_email is set.

$templateParams["title"] = "Crabstore - Notifications";
$templateParams["main-content"] = "template/customer-notifications.php";
$templateParams["notifications"] = $dbh->getUserNotifications($_SESSION[SessionKey::CUSTOMER_EMAIL]);

require_once("template/base.php");
?>