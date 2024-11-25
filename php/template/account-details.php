<?php
    $accountDetails = $templateParams["account-details"][0];
    echo "<div>First Name: " . $accountDetails["firstName"] . "</div>";
    echo "<div>Last Name: " . $accountDetails["lastName"] . "</div>";
    echo "<div>Your email: " . $accountDetails["email"] . "</div>";
    echo "<div>You joined on: " . $accountDetails["joinDate"] . "</div>";
    echo "<div>Current balance: " . $accountDetails["balance"] . "</div>";
?>
