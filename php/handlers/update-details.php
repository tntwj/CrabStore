<?php
require_once("./../bootstrap.php");

//TODO

setFlashMessage("Account Details changed successfully", MessageType::SUCCESS);
header("Location: ./../account.php");
exit();
?>