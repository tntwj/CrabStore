<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$templateParams["title"] = "Crabstore - Orders";
$templateParams["main-content"] = "customer-orders.php";
if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    header('Location: login.php');
    exit;
}
$templateParams["orders"] = $dbh->getOrdersOfCustomer($email);

require_once("template/base.php");
?>