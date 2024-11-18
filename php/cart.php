<?php
require_once("bootstrap.php");

$templateParams["title"] = "Crabstore - Cart";
$templateParams["nome"] = "cart-of-customer.php";
$username="jane_smith";
if (isset($_GET["username"])) {
    $username = $_GET["username"];
}
$templateParams["products-cart"] = $dbh->getCartProductsOfCustomer($username);
require_once("template/base.php");
?>