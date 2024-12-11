<?php
require_once("./../bootstrap.php");

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data["customProductId"])) {
        $customProductId = $data["customProductId"];
        if ($dbh->removeProductFromCart($customProductId)) {
            $options = $dbh->getCustomProductConfigurableOptions($customProductId);
            foreach ($options as $option) {
                $dbh->removeConfiguration($customProductId);
            }
            if ($dbh->removeCustomProduct($customProductId)) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Unable to remove product.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Unable to remove product.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Product ID missing.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>