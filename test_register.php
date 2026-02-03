<?php
// Simulate form POST for signup (include session & csrf token)
session_start();
if (empty($_SESSION['csrf_token'])) $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
$_POST['signup'] = '1';
$_POST['email'] = 'user@example.test';
$_POST['password'] = 'P@ssw0rd!';
$_POST['csrf_token'] = $_SESSION['csrf_token'];
require 'login_signup.php';
echo "Signup script executed\n";
?>