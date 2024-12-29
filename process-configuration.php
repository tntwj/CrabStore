<?php
require_once("bootstrap.php");

if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Something went wrong, please login.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["productId"])) {
        $customProductId = $dbh->configureCustomProduct($_POST["productId"]);
    }

    foreach ($_POST as $key => $value) {
        if ($key === "productId") {
            continue;
        }
        // Match keys with "config_" prefix
        if (preg_match('/^config_(\d+)$/', $key, $matches)) {
            $configurableId = $matches[1]; // Extract the configurable id
            $dbh->configureOptionToCustomProduct($customProductId, $value);
        }
    }
    $dbh->addProductToCart($customProductId, $email);
    header("Location: cart.php");
}
?>