<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$templateParams["title"] = "Crabstore - Order";
$templateParams["main-content"] = "template/order-detail.php";
if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Something went wrong, please login.");
    header('Location: login.php');
    exit;
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