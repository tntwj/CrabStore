<?php
require_once("./../bootstrap.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isUserLoggedIn()) {
    $email = $_SESSION[SessionKey::CUSTOMER_EMAIL];
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];

    if (empty($firstname)) {
        $errors[] = "First name is required.";
    }

    if (empty($lastname)) {
        $errors[] = "Last name is required.";
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
        setFlashMessage("Something went wrong during the process" . $e, MessageType::FAIL);
        header("Location: ./../account.php");
        exit();
    }
} else {
    setFlashMessage("Something went wrong.", MessageType::FAIL);
    header("Location: ./../index.php");
    exit();
}
?>