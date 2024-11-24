<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore - Order";
$templateParams["main-content"] = "template/order-detail.php";
$email="jane.smith@example.com"; // An example
if (isset($_GET["email"])) {
    $email = $_GET["email"];
}
if (isset($_GET["orderId"])) {
    $orderId = $_GET["orderId"];
}
$products = $dbh->getOrderProducts($orderId);
$order = $dbh->getOrder($orderId);

foreach ($products as &$product) {
    $productId = $product["productId"];
    $product["images"] = $dbh->getProductImages($productId);
    $product["information"] = $dbh->getProductInformation($productId);
}

$templateParams["order"] = $order;
$templateParams["order-products"] = $products;

require_once("template/base.php");
?>