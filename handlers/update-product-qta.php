<?php
require_once("./../bootstrap.php");

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data["customProductId"]) && isset($data["quantity"])) {
        $customProductId = $data["customProductId"];
        $quantity = $data["quantity"];
        if ($dbh->updateQtaOfProductCart($customProductId, $quantity)) {
            echo json_encode(["success" => true, "message" => "update quantity successfully"]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Product ID missing.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>