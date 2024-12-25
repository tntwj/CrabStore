<?php
require_once("./../bootstrap.php");

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
        $_SESSION[SessionKey::LOGGED_IN] = true;
        $_SESSION[SessionKey::CUSTOMER_EMAIL] = $email;
        header("Location: ./../index.php");
        exit();
    } else {
        setFlashMessage("The password you entered is wrong", MessageType::FAIL);
        header("Location: ./../login.php");
        exit();
    }
    exit();
}
?>
