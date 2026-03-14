<?php
require_once 'config.php';
require_once 'require_auth.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $user_email = $_SESSION['email'];


    $stmt = $conn->prepare("DELETE FROM bookings WHERE id = ? AND email = ?");
    $stmt->bind_param("is", $id, $user_email);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Booking not found or unauthorized.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }

    $stmt->close();
    $conn->close();
}
?>