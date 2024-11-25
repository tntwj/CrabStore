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
$templateParams["account-details"] = $dbh->getCustomerDetails($_SESSION[SessionKey::CUSTOMER_EMAIL]);

require_once("template/base.php");
?>