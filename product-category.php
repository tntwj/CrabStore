<?php
require_once("bootstrap.php");
$category = isset($_GET["category"]) ? $_GET["category"] : "";

$products = $dbh->getProductsOfCategory($category);

foreach ($products as &$product) {
    $images = $dbh->getProductImages($product["productId"], 1)[0]["imageUrl"];
    $product["image"] = isset($images[0]) ? UPLOAD_DIR . "products/" . $images : 'path/to/default-image.jpg'; 
}

$templateParams["title"] = "CrabStore - " . $category;
$templateParams["main-content"] = "template/explore-product-category.php";
$templateParams["category-details"] = $dbh->getCategoryDetails($category);
$templateParams["products"] = $products;

require_once("template/base.php");
?>
