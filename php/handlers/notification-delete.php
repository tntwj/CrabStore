<?php
require_once("./../bootstrap.php");

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
    exit();
}

$data = json_decode(file_get_contents("php://input"), true);
$notificationId = $data["notificationId"] ?? null;

if (!$notificationId || !is_numeric($notificationId)) {
    echo json_encode(['success' => false, 'error' => 'Invalid notification ID']);
    exit();
}

try {
    $dbh->deleteNotification($notificationId);
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    error_log($e->getMessage());
    echo json_encode(['success' => false, 'error' => 'An error occurred']);
}
?>