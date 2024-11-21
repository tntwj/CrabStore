<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore - Notifications";
$templateParams["main-content"] = "template/customer-notifications.php";
$templateParams["notifications"] = $dbh->getUserNotifications("jane.smith@example.com");

require_once("template/base.php");
?>