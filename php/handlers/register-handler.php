<?php
require_once("./../bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// There is a lot more to be done here.

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    if (!$dbh->customerExists($email)) {
        $dbh->registerCustomer($firstname, $lastname, $email, $password);
        $_SESSION[SessionKey::REGISTER_OUTCOME] = RegisterOutcome::SUCCESS;
        header("Location: ./../index.php");
        exit();
    } else {
        $_SESSION[SessionKey::REGISTER_OUTCOME] = RegisterOutcome::USER_EXISTS;
        header("Location: ./../register.php");
        exit();
    }
}
?>
