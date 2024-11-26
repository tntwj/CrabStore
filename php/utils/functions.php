<?php
// Contains useful functions used when adding scripts to html files

class LoginStatus {
    public const LOGGED_IN = "logged_in";
    public const LOGGED_OUT = "logged_out";
};

class SessionKey {
    public const LOGIN_STATUS = "login_status";
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
    return session_status() === PHP_SESSION_ACTIVE && ($_SESSION[SessionKey::LOGIN_STATUS] ?? null) === LoginStatus::LOGGED_IN;
}
?>