<?php
require_once("bootstrap.php");
$productId = isset($_GET["id"]) ? $_GET["id"] : "";

$product = $dbh->getProductInformation($productId);
$images = $dbh->getProductImages($productId, 3);

if (!empty($images)) {
    $product["images"] = array_map(function($image) {
        return UPLOAD_DIR . "products/" . $image["imageUrl"];
    }, $images);
}

if ($product["discountId"] !== null) {
    $product["discount"] = $dbh->getProductDiscount($productId);
}

$templateParams["title"] = $product["name"];
$templateParams["main-content"] = "template/product-details.php";
$templateParams["product-details"] = $product;

require_once("template/base.php");
?>