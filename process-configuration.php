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
        if ($value !== $_POST["productId"]) {
            $option = $dbh->getConfigurableOption($value);  
            $dbh->configureOptionToCustomProduct($customProductId, $option["configurableOptionId"]);
        }
    }
    $dbh->addProductToCart($customProductId, $email);
    setFlashMessage("Product added to your cart!", MessageType::SUCCESS);
    header("Location: cart.php");
}
?>
