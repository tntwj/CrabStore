<?php
require_once("./../bootstrap.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $storedHashedPassword = $dbh->getCustomerPasswordByEmail($email);

    if ($storedHashedPassword === null) {
        $_SESSION["auth_status"] = "failed - no user found";
        header("Location: ./../login.php");
        exit(); // Return would not be a wise choice since it just goes out of scope the script flow proceeds.
    }
    if (password_verify($password, $storedHashedPassword)) {
        $_SESSION["auth_status"] = "success";
        $_SESSION["user_email"] = $email;
        // TODO handle the remember me button
        header("Location: ./../index.php");
        exit();
    } else {
        $_SESSION["auth_status"] = "failed - wrong password";
        header("Location: ./../login.php");
        exit();
    }
}
?>
