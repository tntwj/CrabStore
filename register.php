<?php
require_once("bootstrap.php");

$templateParams["title"] = "CrabStore - Register";
$templateParams["main-content"] = "register-form.php";
$templateParams["scripts"] = ["js/register-validation.js"];

require_once("template/base.php");
?>
