<?php
require_once 'config.php'; // Uses your existing database connection
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['contact_error'] = "Please fill in all fields.";
        header("Location: contact.php");
        exit();
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        $_SESSION['contact_success'] = "Message sent! We will get back to you soon.";
    } else {
        $_SESSION['contact_error'] = "Error: Could not send message.";
    }

    $stmt->close();
    $conn->close();
    header("Location: contact.php");
    exit();
}
?>