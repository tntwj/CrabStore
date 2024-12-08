<?php
require_once("./../bootstrap.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];

    $errors = [];

    if (empty($firstname) || empty($lastname)) {
        $errors[] = "Please fill out all fields.";
    }

    $namePattern = '/^[a-zA-Z]+$/';
    if (!preg_match($namePattern, $firstname) || !preg_match($namePattern, $lastname)) {
        $errors[] = "Names can only contain letters.";
    }

    if (strlen($firstname) < 2 || strlen($lastname) < 2) {
        $errors[] = "Names must be at least 2 characters long.";
    }

    if (!empty($errors)) {
        setFlashMessage("Errors: " . implode(" ", $errors), MessageType::FAIL);
        header("Location: ./../account.php");
        exit();
    }

    try {
        $dbh->changeCustomerDetails($email, $firstname, $lastname);
        setFlashMessage("Account Details changed successfully", MessageType::SUCCESS);
        header("Location: ./../account.php");
        exit();
    } catch (Exception $e) {
        error_log($e->getMessage());
        setFlashMessage("Something went wrong during the process.", MessageType::FAIL);
        header("Location: ./../account.php");
        exit();
    }
} else {
    setFlashMessage("Something is wrong with the session.", MessageType::FAIL);
    header("Location: ./../account.php");
    exit();
}
?>
