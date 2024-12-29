<?php
require_once("bootstrap.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
    $customerName = $dbh->getCustomerDetails($email)["firstName"];
    $customerOrders = $dbh->getPendingOrders($email);

    foreach ($customerOrders as $order) {
        echo $order["orderStatus"];
        switch ($order["orderStatus"]) {
            case "Ordered":
                $dbh->updateOrder($order["orderId"], "In Transit");
                $dbh->insertNotification("Order #" . $order["orderId"] . " Update", "Hi " . $customerName . "! Your order is now in transit.", $email);
                break;
            case "In Transit":
                $dbh->updateOrder($order["orderId"], "Delivered", date("Y-m-d H:i:s"));
                $dbh->insertNotification("Order #" . $order["orderId"] . " Update", "Hi " . $customerName . "! Your order has been delivered.", $email);
                break;
            default:
                break;
        }
    }
    echo "Orders checked and updated.";
} else {
    echo "Invalid request or user not logged in.";
}
?>