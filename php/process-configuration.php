<?php
require_once("bootstrap.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        $sanitized_key = htmlspecialchars($key, ENT_QUOTES, 'UTF-8');
        $option = $dbh->getConfigurableOption($value);
        var_dump($option);
        
    }
} else {
    echo "Errore: accesso non autorizzato.";
}


?>