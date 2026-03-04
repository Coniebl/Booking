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
      <a href="my_bookings.php" class="nav-link">My Bookings</a> <!-- Link to help page-->
      <a href="logout.php" class="logout-link">Logout</a> <!-- Link to logout page-->
    </nav>
  </header>
  
  <main class="services-page"> <!-- Main content area para sa services page-->
    <h1 class="services-title">BOOK ROOMS</h1> <!-- Main title sa services page-->
    <div class="services-container"> <!-- Container for service cards-->

      <!-- 4 ra ang room na ako gibutang sir for sample lang -->

      <div class="services-container" style="flex-wrap: wrap; justify-content: center; gap: 1.8em;"> 
  <div class="service-card">
    <img src="./assets/two.jpg" class="room-image" alt="Room Image">
    <h3>MAAYO HOTEL</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Good for 2</p>
    <p><img src="./assets/eat.png" class="room-details"> Free breakfast included</p>
    <p><img src="./assets/storey.png" class="room-details"> 3rd to 8th floor</p>
    <p><img src="./assets/money.png" class="room-details"> Php 4,500 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/one.jpg" class="room-image" alt="Room Image">
    <h3>NUSTAR DELUXE</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Good for 2</p>
    <p><img src="./assets/eat.png" class="room-details"> Free breakfast included</p>
    <p><img src="./assets/storey.png" class="room-details"> 10th to 15th floor</p>
    <p><img src="./assets/money.png" class="room-details"> Php 5,000 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/three.jpg" class="room-image" alt="Room Image">
    <h3>NATIVE CAMP</h3>
    <p><img src="./assets/capacity.png" class="room-details"> For Family Use</p>
    <p><img src="./assets/eat.png" class="room-details"> Free breakfast included</p>
    <p><img src="./assets/storey.png" class="room-details"> Not Applicable</p>
    <p><img src="./assets/money.png" class="room-details"> Php 7,500 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/four.jpg" class="room-image" alt="Room Image">
    <h3>UBEC PENTHOUSE</h3>
    <p><img src="./assets/capacity.png" class="room-details"> For Family Use</p>
    <p><img src="./assets/eat.png" class="room-details"> Can cook inside</p>
    <p><img src="./assets/storey.png" class="room-details"> 20th to 30th floor</p>
    <p><img src="./assets/money.png" class="room-details"> Php 15,000 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/five.jpg" class="room-image" alt="Room Image">
    <h3>CITY VIEW SUITE</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Good for 4</p>
    <p><img src="./assets/eat.png" class="room-details"> Breakfast included</p>
    <p><img src="./assets/storey.png" class="room-details"> 8th Floor</p>
    <p><img src="./assets/money.png" class="room-details"> Php 7,500 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/six.jpg" class="room-image" alt="Room Image">
    <h3>ZEN STUDIO</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Good for 2</p>
    <p><img src="./assets/eat.png" class="room-details"> No food included</p>
    <p><img src="./assets/storey.png" class="room-details"> Ground Floor</p>
    <p><img src="./assets/money.png" class="room-details"> Php 3,000 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/seven.jpg" class="room-image" alt="Room Image">
    <h3>GARDEN VILLA</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Family size</p>
    <p><img src="./assets/eat.png" class="room-details"> Buffet included</p>
    <p><img src="./assets/storey.png" class="room-details"> Not Applicable</p>
    <p><img src="./assets/money.png" class="room-details"> Php 12,000 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/eight.jpg" class="room-image" alt="Room Image">
    <h3>SKYLINE LOFT</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Good for 2</p>
    <p><img src="./assets/eat.png" class="room-details"> Mini-bar included</p>
    <p><img src="./assets/storey.png" class="room-details"> 20th Floor</p>
    <p><img src="./assets/money.png" class="room-details"> Php 9,000 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/nine.jpg" class="room-image" alt="Room Image">
    <h3>SUNSET BUNGALOW</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Good for 2</p>
    <p><img src="./assets/eat.png" class="room-details"> Welcome drinks</p>
    <p><img src="./assets/storey.png" class="room-details"> Beachfront</p>
    <p><img src="./assets/money.png" class="room-details"> Php 6,800 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/ten.jpg" class="room-image" alt="Room Image">
    <h3>MOUNTAIN RETREAT</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Good for 2</p>
    <p><img src="./assets/eat.png" class="room-details"> Fruits options</p>
    <p><img src="./assets/storey.png" class="room-details"> Not Applicable</p>
    <p><img src="./assets/money.png" class="room-details"> Php 5,500 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/eleven.jpg" class="room-image" alt="Room Image">
    <h3>PINEWOOD CABIN</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Good for 3</p>
    <p><img src="./assets/eat.png" class="room-details"> Coffee bar</p>
    <p><img src="./assets/storey.png" class="room-details"> 5th Floor</p>
    <p><img src="./assets/money.png" class="room-details"> Php 9,500 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>

  <div class="service-card">
    <img src="./assets/four.jpg" class="room-image" alt="Room Image">
    <h3>IZZ BARKADA</h3>
    <p><img src="./assets/capacity.png" class="room-details"> Group of 6</p>
    <p><img src="./assets/eat.png" class="room-details"> No Inclusions</p>
    <p><img src="./assets/storey.png" class="room-details"> 2nd Floor</p>
    <p><img src="./assets/money.png" class="room-details"> Php 10,000 per night</p>
    <button class="book-now-btn">Book Now</button>
  </div>
</div>
  <div id="popup" class="popup">
  <div class="popup-content">
    <div id="booking-form-container">
      <h2>Complete Your Booking</h2>
      <form id="hotel-booking-form">
        <label for="pax_name">Full Name</label>
        <input type="text" id="pax_name" name="pax_name" required placeholder="John Doe">

        <label for="pax_count">Number of Pax</label>
        <input type="number" id="pax_count" name="pax_count" required min="1">

        <label for="booked_dates">Booking Date</label>
        <input type="date" id="booked_dates" name="booked_dates" required>

        <label for="pax_email">Email Address</label>
        <input type="email" id="pax_email" name="pax_email" required value="<?= htmlspecialchars($_SESSION['email']) ?>">

        <label for="pax_phone">Contact Number</label>
        <input type="tel" id="pax_phone" name="pax_phone" required placeholder="09123456789">

        <div class="form-buttons">
          <button type="submit" class="book-now-btn">Submit Booking</button>
          <button type="button" id="closePopup" class="cancel-btn">Cancel</button>
        </div>
      </form>
    </div>

    <div id="success-message" style="display: none;">
      <p style="font-size: 1.5em; color: green;">✔ Successfully booked!</p>
      <button onclick="location.reload()" class="book-now-btn">OK</button>
    </div>
  </div>
</div>

  <footer>
    © 2025 BookEase | All Rights Reserved
  </footer>
</body>
</html>
