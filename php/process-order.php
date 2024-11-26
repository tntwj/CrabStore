<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    header('Location: login.php');
    exit;
}
$products = $dbh->switchProductsFromCartToOrder($email);
$orderId = $dbh->addOrder($email);
foreach($products as $product) {
    $dbh->addOrderProduct($product["customProductId"], $product["amount"], $orderId);
}
header("Location: order.php?orderId=" . $orderId);
exit();
?>