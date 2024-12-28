<?php
require_once("bootstrap.php");

if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Please login to buy the product.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}

$productId = isset($_GET["id"]) ? $_GET["id"] : "";

$templateParams["main-content"] = "template/customer-configuration.php";
$templateParams["product-details"] =  $dbh->getProductInformation($productId);
$templateParams["title"] = $templateParams["product-details"]["name"];
$templateParams["product-image"] = UPLOAD_DIR . "products/" . $dbh->getProductImages($productId, 1)[0]["imageUrl"];

$templateParams["product-configurables"] = $dbh->getProductConfigurables($productId);
foreach($templateParams["product-configurables"] as $index => $configurable) {
    $templateParams["product-configurables"][$index]["icon"] = UPLOAD_DIR . "configurable-icons/" . $configurable["icon"];
    $templateParams["product-configurables"][$index]["options"] = $dbh->getConfigurableOptions($configurable["configurableId"]);
}
require_once("template/base.php");
?>
