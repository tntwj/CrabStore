<?php
require_once("bootstrap.php");

if (!isUserLoggedIn()) {
    setFlashMessage("Please login to view your account details.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}

$templateParams["title"] = "CrabStore - Account Details";
$templateParams["main-content"] = "template/account-details.php";
$templateParams["account-details"] = $dbh->getCustomerDetails($_SESSION[SessionKey::CUSTOMER_EMAIL]);
$templateParams["total-orders"] = $dbh->getTotalCustomerOrders($_SESSION[SessionKey::CUSTOMER_EMAIL]);
$templateParams["scripts"] = ["js/account-details.js"];
require_once("template/base.php");
?>
