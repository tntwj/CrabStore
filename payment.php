<?php
require_once("bootstrap.php");

if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Something went wrong, please login.", MessageType::FAIL);
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["totalPrice"])) {
    $templateParams["price"] = $_POST["totalPrice"];
} else {
    setFlashMessage("Something went wrong in the payment process", MessageType::FAIL);
    header("Location: index.php");
    exit();
}

$templateParams["title"] = "CrabStore - Payment";
$templateParams["price"] = $_POST["totalPrice"];
$templateParams["main-content"] = "payment-tab.php";

require_once("template/base.php");
?>