<?php

// Controlla se il modulo è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Itera su ogni campo inviato tramite POST
    foreach ($_POST as $key => $value) {
        // Sanitizza i dati
        $sanitized_key = htmlspecialchars($key, ENT_QUOTES, 'UTF-8');
        $sanitized_value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

        // Lavora sui dati (ad esempio, stampa)
        echo "Campo: $sanitized_key, Valore: $sanitized_value<br>";
    }
} else {
    echo "Errore: accesso non autorizzato.";
}


?>