<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore - Orders";
$templateParams["main-content"] = "customer-orders.php";
if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Please login to view your orders.");
    header('Location: login.php');
    exit;
}
$templateParams["orders"] = $dbh->getOrdersOfCustomer($email);

require_once("template/base.php");
?>