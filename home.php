<?php
session_start();

// 1. Protection Guard: If session doesn't exist, kick user back to login
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Extract username from email for a personalized greeting
$username = htmlspecialchars(explode('@', $_SESSION['email'])[0]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookEase - Home</title>
  <link rel="icon" type="image/png" href="./assets/logo.png">
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
</head>
<body>
  <header>
    <div id="header-left-side">
      <img src="./assets/logo.png" alt="BookEase Logo" />
      <h1 class="headertitle">BookEase</h1>
    </div>

    <nav id="icons">
      <a href="home.php" class="nav-link active">Home</a>
      <a href="services.php" class="nav-link">Services</a>
      <a href="contact.php" class="nav-link">Contact</a>
      <a href="help.php" class="nav-link">Help</a>
      <a href="logout.php" id="logout-link">Logout</a>
    </nav>
  </header>

  <main class="home-page">
    <div class="home-content">
      <div class="home-left">
        <h1>Welcome, <span><?= $username ?></span></h1>
        
        <p class="intro-text">
          Looking for a place to relax, unwind, or escape from the noise of the city?  
          BookEase helps you discover cozy hotels, luxurious stays, and perfect vacation spots—all in just a few clicks.
        </p>
        <p class="intro-subtext">
          From budget-friendly rooms to five-star getaways, we make booking smooth, smart, and stress-free.
        </p>
        <button class="book-btn" onclick="window.location.href='services.php'">Book Now</button>
      </div>

      <div class="home-right">
        <div class="service-box">
          <h3>Easy Booking</h3>
          <p>Find and reserve your perfect hotel effortlessly.</p>
        </div>
        <div class="service-box">
          <h3>Top-Rated Hotels</h3>
          <p>We connect you with trusted hotels and resorts nationwide.</p>
        </div>
        <div class="service-box">
          <h3>24/7 Support</h3>
          <p>Need help? Our support team is always here for you.</p>
        </div>
      </div>
    </div>
  </main>

  <footer>
    © 2025 BookEase | All Rights Reserved
  </footer>
</body>
</html>