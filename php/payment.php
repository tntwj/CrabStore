<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$templateParams["title"] = "Crabstore - Payment";
$templateParams["main-content"] = "process-payment.php";

require_once("template/base.php");
?>