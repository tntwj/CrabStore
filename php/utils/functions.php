<?php
// Contains useful functions used when adding scripts to html files
class LoginOutcome {
    public const NO_USER_FOUND = "no_user_found";
    public const WRONG_PASSWORD = "wromg_password";
    public const SUCCESS = "success";
}

class LoginStatus {
    public const LOGGED_IN = "logged_in";
    public const LOGGED_OUT = "logged_out";
};

class SessionKey {
    public const LOGIN_STATUS = "login_status";
    public const LOGIN_OUTCOME = "login_outcome";
    public const CUSTOMER_NAME = "customer_name";
    public const CUSTOMER_EMAIL = "customer_email";
}

function isUserLoggedIn() {
    return session_status() === PHP_SESSION_ACTIVE && ($_SESSION[SessionKey::LOGIN_STATUS] ?? null) == LoginStatus::LOGGED_IN;
}
?>