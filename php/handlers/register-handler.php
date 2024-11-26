<?php
require_once("./../bootstrap.php");

// There is a lot more to be done here.

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];

    if (!$dbh->customerExists($email)) {
        $dbh->registerCustomer($firstname, $lastname, $email, $password);
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
