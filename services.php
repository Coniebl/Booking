<?php require 'require_auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>BookEase - Services</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Services</h1>
    <p>Logged in as: <?= htmlspecialchars($_SESSION['email']) ?></p>
    <p><a href="logout.php">Logout</a></p>
  </header>
  <main>
    <p>This is your Services page. Replace with your real content.</p>
  </main>
</body>
</html>