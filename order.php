<?php
require_once("bootstrap.php");

if (isUserLoggedIn() && isset($_GET["id"])) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Something went wrong, please login.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}

$orderId = $_GET["id"];
$products = $dbh->getOrderProducts($orderId);
$order = $dbh->getOrder($orderId);

foreach ($products as $index => $product) {
    $productId = $product["productId"];
    $products[$index]["image"] = UPLOAD_DIR . "products/" . $dbh->getProductImages($productId, 1)[0]["imageUrl"];
    $products[$index]["information"] = $dbh->getProductInformation($productId);
    $products[$index]["options"] = $dbh->getCustomProductConfiguredOptions($product["customProductId"]);
}

$templateParams["title"] = "CrabStore - Order #" . $order["orderId"];
$templateParams["main-content"] = "template/order-detail.php";
$templateParams["order"] = $order;
$templateParams["order-products"] = $products;

require_once("template/base.php");
?>