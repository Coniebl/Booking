<?php require 'require_auth.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsive design para sa cp-->
  <title>BookEase - Services</title> <!-- Title sa page na makita sa ibabaw-->
  <link rel="icon" type="image/png" href="./assets/logo.png"> <!-- Logo na makita sa tab-->
  <link rel="stylesheet" href="style.css"> <!-- Link sa css file para sa design since external file man sya-->
  <script defer src="script.js"></script> <!-- Link sa js file para sa functionality since external file man sya-->
</head>

<body class="page-services"> <!-- Body class para sa specific styling sa services page-->
  <header>
    <div id="header-left-side">
      <img src="./assets/logo.png" alt="BookEase Logo" /> <!-- Logo image sa header-->
      <h1 class="headertitle">BookEase</h1> <!-- Title which is naa sa header-->
    </div>

    <nav id="icons"> <!-- Navigation bar sa header-->
      <a href="home.php" class="nav-link">Home</a> <!-- Link to home page-->
      <a href="services.php" class="nav-link active">Services</a> <!-- Link to services page with active class since naa ta diri-->
      <a href="contact.php" class="nav-link">Contact</a> <!-- Link to contact page-->
      <a href="help.php" class="nav-link">Help</a> <!-- Link to help page-->
      <a href="logout.php" class="logout-link">Logout</a> <!-- Link to logout page-->
    </nav>
  </header>
  
  <main class="services-page"> <!-- Main content area para sa services page-->
    <h1 class="services-title">BOOK ROOMS</h1> <!-- Main title sa services page-->
    <div class="services-container"> <!-- Container for service cards-->

      <!-- 4 ra ang room na ako gibutang sir for sample lang -->

      <div class="service-card"> <!-- Individual card every room-->
        <img src="./assets/two.jpg" class="room-image" alt="Room Image"> <!-- Room image 1-->
        <h3>MAAYO HOTEL</h3> <!-- Room name 1 using h3 para di dako ang text-->
        <p><img src="./assets/capacity.png" class="room-details"> Good for 2</p> <!-- Room capacity with icon tahay para chyy-->
        <p><img src="./assets/eat.png" class="room-details"> Free breakfast included</p> <!-- Room breakfast if free ba or di with icon nasad -->
        <p><img src="./assets/storey.png" class="room-details"> 3rd to 8th floor</p> <!-- Room floor if asa na floor located with icon-->
        <p><img src="./assets/money.png" class="room-details"> Php 4,500 per night</p> <!-- Room price per nught na sya with icon-->
        <button class="book-now-btn">Book Now</button> <!-- Book now button if they wanttt-->
      </div>

      <div class="service-card"> <!-- Individual card every room-->
        <img src="./assets/one.jpg" class="room-image" alt="Room Image"> <!-- Room image 2-->
        <h3>NUSTAR DELUXE</h3> <!-- Room name 2 using h3 nasad para di dako ang text-->
        <p><img src="./assets/capacity.png" class="room-details"> Good for 2</p> <!-- Room capacity with icon tahay para chyy-->
        <p><img src="./assets/eat.png" class="room-details"> Free breakfast included</p> <!-- Room breakfast if free ba or di with icon nasad -->
        <p><img src="./assets/storey.png" class="room-details"> 10th to 15th floor</p> <!-- Room floor if asa na floor located with icon-->
        <p><img src="./assets/money.png" class="room-details"> Php 5,000 per night</p> <!-- Room price per nught na sya with icon-->
        <button class="book-now-btn">Book Now</button> <!-- Book now button if they want na mubook-->
      </div>

      <div class="service-card"> <!-- Individual card every room-->
        <img src="./assets/three.jpg" class="room-image" alt="Room Image"> <!-- Room image 3-->
        <h3>NATIVE CAMP</h3> <!-- Room name 3 using h3 para di dako ang text-->
        <p><img src="./assets/capacity.png" class="room-details"> For Family Use</p> <!-- Room capacity with icon tahay para chuy-->
        <p><img src="./assets/eat.png" class="room-details"> Free breakfast included</p> <!-- Room breakfast if free ba or di with icon nasad -->
        <p><img src="./assets/storey.png" class="room-details"> Not Applicable</p> <!-- Room floor if asa na floor located with icon-->
        <p><img src="./assets/money.png" class="room-details"> Php 7,500 per night</p> <!-- Room price per nught na sya with icon-->
        <button class="book-now-btn">Book Now</button> <!-- Book now button if they want na mubook-->
      </div>

      <div class="service-card"> <!-- Individual card every room-->
        <img src="./assets/four.jpg" class="room-image" alt="Room Image"> <!-- Room image 4-->
        <h3>UBEC PENTHOUSE</h3> <!-- Room name 4 using h3 para di dako ang text-->
        <p><img src="./assets/capacity.png" class="room-details"> For Family Use</p>  <!-- Room capacity with icon tahay para chuy-->
        <p><img src="./assets/eat.png" class="room-details"> Can cook inside</p> <!-- Room breakfast if free ba or di with icon nasad -->
        <p><img src="./assets/storey.png" class="room-details"> 20th to 30th floor</p> <!-- Room floor if asa na floor located with icon-->
        <p><img src="./assets/money.png" class="room-details"> Php 15,000 per night</p> <!-- Room price per nught na sya with icon-->
        <button class="book-now-btn">Book Now</button> <!-- Book now button if they want na mubook-->
      </div>
    </div>
  </main>

  <div id="popup" class="popup"> <!-- Popup container if ilang iclick ang BOOK NOW is mupop up ni showing confirmation-->
    <div class="popup-content">
      <p>Successfully booked!</p> <!-- Confirmation message-->
      <button id="closePopup">OK</button> <!-- OK button to close the popup-->
    </div>
  </div>

  <footer> <!-- Footer sa page-->
    © 2025 BookEase | All Rights Reserved
  </footer>
</body>
</html>
