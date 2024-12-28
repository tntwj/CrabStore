<?php
require_once("bootstrap.php");

$templateParams["title"] = "CrabStore - Cart";
$templateParams["main-content"] = "customer-cart.php";
if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Please login to view your cart.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}
$cartProducts = $dbh->getCartProductsOfCustomer($email);

foreach ($cartProducts as $index => $product) {
    $productId = $product["productId"];
    $cartProducts[$index]["image"] = UPLOAD_DIR . "products/" . $dbh->getProductImages($productId, 1)[0]["imageUrl"];
    $cartProducts[$index]["options"] = $dbh->getCustomProductConfiguredOptions($product["customProductId"]);
    $cartProducts[$index]["discount"] = $dbh->getProductDiscount($productId);
}

$templateParams["cart-products"] = $cartProducts;
$templateParams["scripts"] = ["js/customer-cart.js"];

require_once("template/base.php");
?>
