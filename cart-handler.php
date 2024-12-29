<?php
require_once("bootstrap.php");

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data["action"]) && isset($data["customProductId"])) {
        $action = $data["action"];
        $customProductId = $data["customProductId"];

        switch ($action) {
            case "updateQuantity":
                if (isset($data["quantity"])) {
                    $dbh->updateCartProductQuantity($customProductId, $data["quantity"]);
                    echo json_encode(["success" => true, "message" => "Quantity updated successfully"]);
                    exit();
                } else {
                    echo json_encode(["success" => false, "message" => "Quantity value missing"]);
                    exit();
                }
                break;
        
            case "removeProduct":
                if ($dbh->removeProductFromCart($customProductId)) {
                    echo json_encode(["success" => true, "message" => "Product removed successfully"]);
                    exit();
                } else {
                    echo json_encode(["success" => false, "message" => "Failed to remove product from cart"]);
                    exit();
                }
                break;
        
            default:
                echo json_encode(["success" => false, "message" => "Invalid action"]);
                exit();
        }
    } else {
        echo json_encode(["success" => false, "message" => "Action or product id missing"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}
?>