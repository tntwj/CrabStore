<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore - Order";
$templateParams["main-content"] = "template/order-detail.php";
$email="jane.smith@example.com"; // An example
$orderId = 2;
if (isset($_GET["email"])) {
    $email = $_GET["email"];
}
if (isset($_GET["orderId"])) {
    $orderId = $_GET["orderId"];
}
$order = $dbh->getOrderDetails($email, $orderId);
var_dump($order);

foreach ($order as $singleOrder) {
    $productId = $singleOrder["productId"];
    $product[$productId]["images"] = $dbh->getProductImages($productId);
    $product[$productId]["information"] = $dbh->getProductInformation($productId);
}

$templateParams["order"] = $order;
$templateParams["product"] = $product;

require_once("template/base.php");
?>