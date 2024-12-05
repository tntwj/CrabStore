<?php
// Contains useful functions used when adding scripts to html files

class SessionKey {
    public const LOGGED_IN = "logged_in";
    public const CUSTOMER_NAME = "customer_name";
    public const CUSTOMER_EMAIL = "customer_email";
}

class MessageType {
    public const SUCCESS = "success";
    public const INFO = "info";
    public const FAIL = "danger";
    public const WARNING = "warning";
}

function setFlashMessage($message, $type = MessageType::INFO) {
    $_SESSION["flash_message"] = [
        "message" => $message,
        "type" => $type
    ];
}

function displayFlashMessage() {
    if (isset($_SESSION["flash_message"])) {
        $message = $_SESSION["flash_message"]["message"];
        $type = $_SESSION["flash_message"]["type"];
        echo "<div class='alert alert-" . $type . " alert-dismissible fade show role='alert'>"
            . $message .
            "<button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            </div>";
        unset($_SESSION["flash_message"]);
    }
}

function isUserLoggedIn() {
    return session_status() === PHP_SESSION_ACTIVE && ($_SESSION[SessionKey::LOGGED_IN] ?? null) === true;
}

// Map color name to color code using $colorMap, default to gray if not found.
function getColorCode($colorName) {
    $colorMap = [
        "Red" => "#FF0000",
        "Blue" => "#0000FF",
        "Green" => "#00FF00",
        "Deep Blue" => "#001F54", // Custom color for "Deep Blue"
        "Yellow" => "#FFFF00",
        "Gold" => "#FFFF11",
        "Black" => "#000000",
        "White" => "#FFFFFF",
    ];

    return $colorMap[$colorName] ?? "#CCCCCC";
}
?>