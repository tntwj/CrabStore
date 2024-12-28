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
                    $quantity = $data["quantity"];
                    if ($dbh->updateCartProductQuantity($customProductId, $quantity)) {
                        echo json_encode(["success" => true, "message" => "Quantity updated successfully"]);
                    } else {
                        echo json_encode(["success" => false, "message" => "Failed to update quantity"]);
                    }
                } else {
                    echo json_encode(["success" => false, "message" => "Quantity value missing"]);
                }
                break;

            case "removeProduct":
                if ($dbh->removeProductFromCart($customProductId)) {
                    $options = $dbh->getCustomProductConfiguredOptions($customProductId);
                    if ($dbh->removeCustomProduct($customProductId)) {
                        echo json_encode(["success" => true, "message" => "Product removed successfully"]);
                    } else {
                        echo json_encode(["success" => false, "message" => "Failed to remove product"]);
                    }
                } else {
                    echo json_encode(["success" => false, "message" => "Failed to remove product from cart"]);
                }
                break;

            default:
                echo json_encode(["success" => false, "message" => "Invalid action"]);
                break;
        }
    } else {
        echo json_encode(["success" => false, "message" => "Action or product id missing"]);
    }
} else {
    echo json_encode(['success' => false, 'message' => "Invalid request method"]);
}
?>
