<?php
require_once("./../bootstrap.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $firstname = trim($_POST["first-name"]);
    $lastname = trim($_POST["last-name"]);

    $errors = validateRegistration($firstname, $lastname, $email, $password);

    if (!empty($errors)) {
        setFlashMessage("Errors: " . implode(" ", $errors), MessageType::FAIL);
        header("Location: ./../register.php");
        exit();
    }

    if (registerUser($firstname, $lastname, $email, $password, $dbh)) {
        setFlashMessage("You have registered successfully.", MessageType::SUCCESS);
        header("Location: ./../login.php");
        exit();
    } else {
        setFlashMessage("The email is already registered.", MessageType::FAIL);
        header("Location: ./../register.php");
        exit();
    }
}

function validateRegistration($firstname, $lastname, $email, $password) {
    $errors = [];

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        $errors[] = "All fields are required.";
    }

    if (strlen($firstname) < 2 || strlen($lastname) < 2) {
        $errors[] = "Names must be at least 2 characters long.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    return $errors;
}

function registerUser($firstname, $lastname, $email, $password, $dbh) {
    if ($dbh->customerExists($email)) {
        return false;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $dbh->registerCustomer($firstname, $lastname, $email, $hashedPassword);
    return true;
}
?>
