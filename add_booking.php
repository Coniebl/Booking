<?php
require_once 'config.php'; // Connects to your booking_db
require_once 'require_auth.php'; // Ensures only logged-in users can book

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Map the form IDs to your database columns
    $name = $_POST['pax_name'] ?? '';
    $pax = $_POST['pax_count'] ?? 0;
    $date = $_POST['booked_dates'] ?? '';
    $email = $_POST['pax_email'] ?? '';
    $phone = $_POST['pax_phone'] ?? '';

    // Prepare SQL to prevent errors
    $stmt = $conn->prepare("INSERT INTO bookings (name, number_pax, booking_date, email, contact_number) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sisss", $name, $pax, $date, $email, $phone);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }

    $stmt->close();
    $conn->close();
}
?>