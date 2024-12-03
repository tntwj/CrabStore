<?php
require_once("bootstrap.php");
$productId = isset($_GET['product']) ? $_GET['product'] : "";
$templateParams['product-category'] = isset($_GET['category']) ? $_GET['category'] : "";
$templateParams['media'] = isset($_GET['media']) ? $_GET['media'] : "";

$product = $dbh->getProductInformation($productId);
$templateParams["title"] = "Product page";
$templateParams["main-content"] = "template/product-page.php";
$templateParams["single-product-details"] = $product;

require_once("template/base.php");
?>