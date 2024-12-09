<?php
require_once("bootstrap.php");

if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Something went wrong, please login.", MessageType::FAIL);
    header('Location: login.php');
    exit();
}

$templateParams["title"] = "CrabStore - Payment";
$templateParams["main-content"] = "process-payment.php";

require_once("template/base.php");
?>
