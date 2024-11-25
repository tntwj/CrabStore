<?php
require_once("./../bootstrap.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $storedHashedPassword = $dbh->getCustomerPasswordByEmail($email);

    if ($storedHashedPassword === null) {
        $_SESSION[SessionKey::LOGIN_OUTCOME] = LoginOutcome::NO_USER_FOUND;
        header("Location: ./../login.php");
        exit();
    }
    if (password_verify($password, $storedHashedPassword)) {
        $_SESSION[SessionKey::LOGIN_OUTCOME] = LoginOutcome::SUCCESS;
        $_SESSION[SessionKey::LOGIN_STATUS] = LoginStatus::LOGGED_IN;
        $_SESSION[SessionKey::CUSTOMER_EMAIL] = $email;
        // TODO handle the remember me button
        header("Location: ./../index.php");
        exit();
    } else {
        $_SESSION[SessionKey::LOGIN_OUTCOME] = LoginOutcome::WRONG_PASSWORD;
        header("Location: ./../login.php");
        exit();
    }
}
?>
