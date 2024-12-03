<?php
require_once("bootstrap.php");
$pageCategory = isset($_GET['page']) ? $_GET['page'] : "";

$products = $dbh->getProductsOfCategory($pageCategory);

$templateParams["title"] = "Crabstore - " . $pageCategory;
$templateParams["main-content"] = "template/explore-products.php";
$templateParams["product-category"] = $pageCategory;
$templateParams["products-details"] = $products;

require_once("template/base.php");
?>
