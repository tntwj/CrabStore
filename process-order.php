<?php
require_once("bootstrap.php");

if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Something went wrong, please login.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}
$products = $dbh->popCartProducts($email);
$orderId = $dbh->addOrder($email);
foreach($products as $product) {
    $dbh->addOrderProduct($product["customProductId"], $product["amount"], $orderId);
}
$customerName = $dbh->getCustomerDetails($email)["firstName"];
$dbh->insertNotification("Order #" . $orderId . " Update", "Hi " . $customerName . "! You have successfully placed the order.", $email);
setFlashMessage("You have successfully placed the order.", MessageType::INFO);
header("Location: order.php?id=" . $orderId);
exit();
?>