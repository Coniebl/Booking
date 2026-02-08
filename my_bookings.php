<?php require 'require_auth.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Responsive design meta tag -->
    <title>BookEase - My Bookings</title> <!-- Page title na makita sa tab-->
    <link rel="stylesheet" href="style.css" /> <!-- Link para sa external CSS file -->
  </head>

  <body class="page-my-bookings">
    <header>
      <div id="header-left-side">
        <img src="./assets/logo.png" alt="BookEase Logo" /> <!-- Logo image sa left side sa header -->
        <h1 class="headertitle">BookEase</h1>
      </div>
      <nav id="icons" aria-label="Primary navigation">
        <a href="home.php" class="nav-link">Home</a> <!-- Link to home page-->
        <a href="services.php" class="nav-link">Services</a> <!-- Link to services page-->
        <a href="contact.php" class="nav-link">Contact</a> <!-- Link to contact page-->
        <a href="my_bookings.php" class="nav-link active">My Bookings</a> <!-- Link to my bookings page-->
        <a href="logout.php" id="logout-link">Logout</a> <!-- Link to logout -->
      </nav>
    </header>

    

    <footer> <!-- Footer section -->
      © 2025 BookEase | All Rights Reserved
    </footer>
  </body>
</html>
