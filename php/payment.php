<?php
require_once("bootstrap.php");

if (isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
} else {
    setFlashMessage("Something went wrong, please login.");
    header('Location: login.php');
    exit;
}

$templateParams["title"] = "Crabstore - Payment";
$templateParams["main-content"] = "process-payment.php";

require_once("template/base.php");
?>