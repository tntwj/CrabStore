<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore - Orders";
$templateParams["main-content"] = "customer-orders.php";
$email="jane.smith@example.com";
if (isset($_GET["email"])) {
    $email = $_GET["email"];
}
$templateParams["orders"] = $dbh->getOrdersOfCustomer($email);

require_once("template/base.php");
?>