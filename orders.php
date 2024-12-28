<?php
require_once("bootstrap.php");

if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Please login to view your orders.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}
$templateParams["title"] = "CrabStore - Orders";
$templateParams["main-content"] = "customer-orders.php";
$templateParams["orders"] = $dbh->getCustomerOrders($email);

require_once("template/base.php");
?>
