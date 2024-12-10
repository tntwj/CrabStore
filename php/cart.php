<?php
require_once("bootstrap.php");

$templateParams["title"] = "CrabStore - Cart";
$templateParams["main-content"] = "customer-cart.php";
if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Please login to view your cart.", MessageType::FAIL);
    header('Location: login.php');
    exit();
}
$cartProducts = $dbh->getCartProductsOfCustomer($email);

foreach ($cartProducts as &$product) {
    $productId = $product["productId"];
    $product["image"] = $dbh->getProductImages($productId);
    $product["options"] = $dbh->getCustomProductConfigurableOptions($product["customProductId"]);
    $product["discount"] = $dbh->getProductDiscount($productId);
}

$templateParams["products-cart"] = $cartProducts;

require_once("template/base.php");
?>
