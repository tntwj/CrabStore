<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$templateParams["title"] = "CrabStore - Register";
$templateParams["main-content"] = "register-form.php";
$templateParams["scripts"] = ["js/register-validation.js"];

require_once("template/base.php");
?>
