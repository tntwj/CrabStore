<?php
require_once("bootstrap.php");
$category = isset($_GET["category"]) ? $_GET["category"] : "";

$products = $dbh->getProductsOfCategory($category);

foreach ($products as $key => $product) {
    $images = $dbh->getProductImages($product["productId"], 1)[0]["imageUrl"];
    $products[$key]["image"] = UPLOAD_DIR . "products/" . $images; 
    if ($product["discountId"] !== null) {
        $products[$key]["discount"] = $dbh->getProductDiscount($product["productId"]);
    }
}

$templateParams["title"] = "CrabStore - " . $category;
$templateParams["main-content"] = "template/explore-product-category.php";
$templateParams["category-details"] = $dbh->getCategoryDetails($category);
$templateParams["products"] = $products;

require_once("template/base.php");
?>
