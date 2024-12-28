<?php
require_once("bootstrap.php");

$templateParams["title"] = "CrabStore - Order";
$templateParams["main-content"] = "template/order-detail.php";
if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Something went wrong, please login.", MessageType::FAIL);
    header('Location: login.php');
    exit();
}
if (isset($_GET["id"])) {
    $orderId = $_GET["id"];
}
$products = $dbh->getOrderProducts($orderId);
$order = $dbh->getOrder($orderId);

foreach ($products as &$product) {
    $productId = $product["productId"];
    $product["images"] = $dbh->getProductImages($productId);
    $product["information"] = $dbh->getProductInformation($productId);
    $product["options"] = $dbh->getCustomProductConfiguredOptions($product["customProductId"]);
}

$templateParams["order"] = $order;
$templateParams["order-products"] = $products;

require_once("template/base.php");
?>
