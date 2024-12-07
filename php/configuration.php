<?php
require_once("bootstrap.php");
$productId = isset($_GET['product']) ? $_GET['product'] : "";
$templateParams['media'] = isset($_GET['media']) ? $_GET['media'] : "";

$templateParams["title"] = "Product page";
$templateParams["main-content"] = "template/customer-configuration.php";
$templateParams["single-product-details"] =  $dbh->getProductInformation($productId);
$templateParams["product-config-options"] = $dbh->getProductConfigurableOptions($productId);

require_once("template/base.php");
?>
