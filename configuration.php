<?php
require_once("bootstrap.php");
$productId = isset($_GET["id"]) ? $_GET["id"] : "";

$templateParams["main-content"] = "template/customer-configuration.php";
$product = $dbh->getProductInformation($productId);
$templateParams["product-details"] =  $product;
$templateParams["title"] = $product["name"];
$templateParams["product-image"] = UPLOAD_DIR . "products/" . $dbh->getProductImages($productId, 1)[0]["imageUrl"];

$templateParams["product-configurables"] = $dbh->getProductConfigurables($productId);
foreach($templateParams["product-configurables"] as $index => $configurable) {
    $templateParams["product-configurables"][$index]["icon"] = UPLOAD_DIR . "configurable-icons/" . $configurable["icon"];
    $templateParams["product-configurables"][$index]["options"] = $dbh->getConfigurableOptions($configurable["configurableId"]);
}
require_once("template/base.php");
?>
