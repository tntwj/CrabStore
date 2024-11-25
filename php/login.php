<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$templateParams["title"] = "Crabstore - Login";
$templateParams["main-content"] = "template/login-form.php";

require_once("template/base.php");
?>