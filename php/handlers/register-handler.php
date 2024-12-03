<?php
require_once("./../bootstrap.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST["password"]);
    $firstname = trim($_POST["firstname"]);
    $lastname = trim($_POST["lastname"]);

    $errors = [];

    if (empty($firstname)) {
        $errors[] = "First name is required.";
    }

    if (empty($lastname)) {
        $errors[] = "Last name is required.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (!empty($errors)) {
        setFlashMessage("Errors: " . implode(" ", $errors), MessageType::FAIL);
        header("Location: ./../register.php");
        exit();
    }

    if (!$dbh->customerExists($email)) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $dbh->registerCustomer($firstname, $lastname, $email, $hashedPassword);
        setFlashMessage("You have registered successfully.", MessageType::SUCCESS);
        header("Location: ./../index.php");
        exit();
    } else {
        setFlashMessage("The email is already registered.", MessageType::FAIL);
        header("Location: ./../register.php");
        exit();
    }
}
?>
