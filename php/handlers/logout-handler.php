<?php
require_once("./../bootstrap.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$_SESSION[SessionKey::LOGIN_STATUS] = LoginStatus::LOGGED_OUT;
unset($_SESSION[SessionKey::CUSTOMER_EMAIL]);

header("Location: ./../index.php");
exit();