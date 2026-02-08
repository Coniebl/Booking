<?php
require_once 'config.php';
require_once 'require_auth.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['pax_name'] ?? '';
    $pax = $_POST['pax_count'] ?? 0;
    $date = $_POST['booked_dates'] ?? '';
    $phone = $_POST['pax_phone'] ?? '';
    $user_email = $_SESSION['email'];

    // Update only if the booking belongs to the logged-in user for security
    $stmt = $conn->prepare("UPDATE bookings SET name=?, number_pax=?, booking_date=?, contact_number=? WHERE id=? AND email=?");
    $stmt->bind_param("sissss", $name, $pax, $date, $phone, $id, $user_email);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }

    $stmt->close();
    $conn->close();
}
?>