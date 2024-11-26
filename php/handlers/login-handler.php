<?php
require_once("./../bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $storedHashedPassword = $dbh->getCustomerPasswordByEmail($email);

    if ($storedHashedPassword === null) {
        setFlashMessage("No user was found", MessageType::FAIL);
        header("Location: ./../login.php");
        exit();
    }
    if (password_verify($password, $storedHashedPassword)) {
        setFlashMessage("You logged in succesfully", MessageType::SUCCESS);
        $_SESSION[SessionKey::LOGIN_STATUS] = LoginStatus::LOGGED_IN;
        $_SESSION[SessionKey::CUSTOMER_EMAIL] = $email;
        // TODO handle the remember me button
        header("Location: ./../index.php");
        exit();
    } else {
        setFlashMessage("The password you entered is wrong", MessageType::FAIL);
        header("Location: ./../login.php");
        exit();
    }
}
?>
