<?php
require_once("bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$templateParams["title"] = "CrabStore - Register";
$templateParams["main-content"] = "register-form.php";

require_once("template/base.php");
?>
