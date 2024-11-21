<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore - Cart";
$templateParams["main-content"] = "cart-of-customer.php";
$username="jane_smith";
if (isset($_GET["username"])) {
    $username = $_GET["username"];
}
$cartProducts = $dbh->getCartProductsOfCustomer($username);

foreach ($cartProducts as &$product) {
    $productId = $product['productId'];
    $product['image'] = $dbh->getProductImages($productId);
}

$templateParams["products-cart"] = $cartProducts;

require_once("template/base.php");
?>