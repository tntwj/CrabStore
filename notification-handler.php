<?php
require_once("bootstrap.php");

header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["success" => false, "error" => "Invalid request method"]);
    exit();
}

$data = json_decode(file_get_contents("php://input"), true);
$action = $data["action"] ?? null;
$notificationId = $data["id"] ?? null;

if (!$notificationId || !is_numeric($notificationId)) {
    echo json_encode(["success" => false, "error" => "Invalid notification id"]);
    exit();
}

if (!$action || !in_array($action, ["markAsRead", "delete"])) {
    echo json_encode(["success" => false, "error" => "Invalid or missing action"]);
    exit();
}

try {
    if ($action === "markAsRead") {
        $dbh->setNotificationAsRead($notificationId);
    } elseif ($action === "delete") {
        $dbh->deleteNotification($notificationId);
    }

    echo json_encode(["success" => true]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "error" => "An error occurred"]);
}
?>