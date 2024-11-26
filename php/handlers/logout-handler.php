<?php
require_once("./../bootstrap.php");

$_SESSION[SessionKey::LOGGED_IN] = false;
unset($_SESSION[SessionKey::CUSTOMER_EMAIL]);

header("Location: ./../index.php");
exit();