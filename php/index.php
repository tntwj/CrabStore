<?php
require_once("bootstrap.php");

$templateParams["title"] = "CrabStore - Home";

if (isUserLoggedIn() && isset($_SESSION[SessionKey::CUSTOMER_EMAIL])) {
    $accountDetails = $dbh->getCustomerDetails($_SESSION[SessionKey::CUSTOMER_EMAIL]);
    $templateParams["first-name"] = $accountDetails[0]["firstName"];
}

$templateParams["upcoming-products"] = $dbh->getThreeUpcomingProducts();
$templateParams["main-content"] = "template/landing-page-content.php";

require_once("template/base.php");
?>
