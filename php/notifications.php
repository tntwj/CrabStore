<?php
require_once("bootstrap.php");

if (!isUserLoggedIn()) {
    setFlashMessage("Please login to view your notifications.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}

$templateParams["title"] = "CrabStore - Notifications";
$templateParams["main-content"] = "template/customer-notifications.php";
$templateParams["notifications"] = $dbh->getUserNotifications($_SESSION[SessionKey::CUSTOMER_EMAIL]);
$templateParams["scripts"] = array("js/notification-mark.js", "js/notification-delete.js");

require_once("template/base.php");
?>
