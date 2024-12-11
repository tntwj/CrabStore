<?php
require_once("./../bootstrap.php");

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data["customProductId"])) {
        $customProductId = $data["customProductId"];
        if ($dbh->removeProductFromCart($customProductId)) {
            
        }
    }
}



?>