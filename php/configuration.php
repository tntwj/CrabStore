<?php
require_once("bootstrap.php");
$productId = isset($_GET['product']) ? $_GET['product'] : "";
$templateParams['media'] = isset($_GET['media']) ? $_GET['media'] : "";

$templateParams["title"] = "Product page";
$templateParams["main-content"] = "template/customer-configuration.php";
$templateParams["single-product-details"] =  $dbh->getProductInformation($productId);
$templateParams["product-configurables"] = $dbh->getProductConfigurables($productId);
foreach($templateParams["product-configurables"] as &$configurable) {
    $configurable["options"] = $dbh->getConfigurableOptions($configurable["configurableId"]);
}
require_once("template/base.php");
?>
