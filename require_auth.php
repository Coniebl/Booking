<?php
// Simple include for protecting pages
if (session_status() !== PHP_SESSION_ACTIVE) session_start();
if (!isset($_SESSION['email'])){
    header('Location: index.php');
    exit();
}
?>