<?php
require_once("./../bootstrap.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];

    $errors = [];

    if (empty($firstname) || empty($lastname)) {
        $errors[] = "All fields are required.";
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
        if ($dbh->changeCustomerDetails($email, $firstname, $lastname)) {
            setFlashMessage("Account Details changed successfully.", MessageType::SUCCESS);
        } else {
            setFlashMessage("We were unable to change your personal details.", MessageType::FAIL);
        }
        header("Location: ./../account.php");
        exit();
    } catch (Exception $e) {
        setFlashMessage("Something went wrong during the personal details update process.", MessageType::FAIL);
        header("Location: ./../account.php");
        exit();
    }
} else {
    setFlashMessage("Invalid session or request.", MessageType::FAIL);
    header("Location: ./../account.php");
    exit();
}
?>
