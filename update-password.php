<?php
require_once("bootstrap.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
    $currentPassword = trim($_POST["currentPassword"]);
    $newPassword = trim($_POST["newPassword"]);
    $confirmPassword = trim($_POST["confirmPassword"]);

    if (!$currentPassword || !$newPassword || !$confirmPassword) {
        setFlashMessage("All fields are required.", MessageType::FAIL);
        header("Location: account.php");
        exit();
    }

    if ($newPassword !== $confirmPassword) {
        setFlashMessage("New password and confirm password do not match.", MessageType::FAIL);
        header("Location: account.php");
        exit();
    }

    $storedHashedPassword = $dbh->getCustomerPasswordByEmail($email);

    if (!password_verify($currentPassword, $storedHashedPassword)) {
        setFlashMessage("Current password is incorrect.", MessageType::FAIL);
        header("Location: account.php");
        exit();
    }

    $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    try {
        if ($dbh->changeCustomerPassword($email, $newHashedPassword)) {
            setFlashMessage("Your password has been successfully changed.", MessageType::SUCCESS);
        } else {
            setFlashMessage("We were unable to update your password.", MessageType::FAIL);
        }
        header("Location: account.php");
        exit();
    } catch (Exception $e) {
        setFlashMessage("Something went wrong during the password update process.", MessageType::FAIL);
        header("Location: account.php");
        exit();
    }
} else {
    setFlashMessage("Invalid session or request.", MessageType::FAIL);
    header("Location: account.php");
    exit();
}
?>