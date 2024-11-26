<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$templateParams["title"] = "Crabstore - Cart";
$templateParams["main-content"] = "customer-cart.php";
if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Please login to view your cart.");
    header('Location: login.php');
    exit;
}
$cartProducts = $dbh->getCartProductsOfCustomer($email);

foreach ($cartProducts as &$product) {
    $productId = $product["productId"];
    $product["image"] = $dbh->getProductImages($productId);
}

$templateParams["products-cart"] = $cartProducts;

require_once("template/base.php");
?>