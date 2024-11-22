<?php
require_once("./../bootstrap.php");
session_start();

// There is a lot more to be done here.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    $dbh->registerCustomer($firstname, $lastname, $email, $password);
    header("Location: ./../index.php");
    exit();
}
?>
