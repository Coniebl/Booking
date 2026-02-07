<?php require 'require_auth.php'; ?>

<!-- SINCE WA NAKOY MAHUNAHUNAAN NA IBUTANG ARI, MGA FAQs nalang sir -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Responsive design meta tag -->
    <title>BookEase - Help</title> <!-- Page title na makita sa tab-->
    <link rel="stylesheet" href="style.css" /> <!-- Link para sa external CSS file -->
  </head>

  <body class="page-help">
    <header>
      <div id="header-left-side">
        <img src="./assets/logo.png" alt="BookEase Logo" /> <!-- Logo image sa left side sa header -->
        <h1 class="headertitle">BookEase</h1>
      </div>
      <nav id="icons" aria-label="Primary navigation">
        <a href="home.php" class="nav-link">Home</a> <!-- Link to home page-->
        <a href="services.php" class="nav-link">Services</a> <!-- Link to services page-->
        <a href="contact.php" class="nav-link">Contact</a> <!-- Link to contact page-->
        <a href="help.php" class="nav-link active">Help</a> <!-- Link to help page-->
        <a href="logout.php" id="logout-link">Logout</a> <!-- Link to logout -->
      </nav>
    </header>

    <main class="help-main"> <!-- Main content area for help page -->
      <section class="help-hero">
        <h1>Help & Frequently Asked Questions</h1>
        <p>Below are common questions from our users. If you still need help, contact our support team.</p>
      </section>

      <section class="faq-section">
        <h2>Frequently Asked Questions</h2>

        <!-- mao nani ang FAQ table using TABLE-->
        <div class="table-wrap">
          <table class="faq-table" summary="Frequently asked questions and answers">
            <thead> <!-- Table header for FAQ questions and answers -->
              <tr>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>How do I make or cancel a booking?</td>
                <td>To make a booking, go to Services, choose a hotel and follow the booking flow. To cancel, open your bookings in the main dashboard and select the reservation, then choose Cancel and follow the prompts. Check the cancellation policy before confirming.</td>
              </tr>
              <tr>
                <td>What payment methods are accepted?</td>
                <td>We accept major credit/debit cards (Visa, Mastercard), PayPal, and some local payment options depending on the property. You can view available methods at checkout.</td>
              </tr>
              <tr>
                <td>Can I change my booking dates?</td>
                <td>Yes — if the property allows modifications. Go to your booking details and choose Modify. Modifications may be subject to rate differences or fees depending on the property's policy.</td>
              </tr>
              <tr>
                <td>How do I get a receipt or invoice?</td>
                <td>Receipts are available in your account under 'My Bookings'. Open the booking and click 'Download receipt'. If you need a specific invoice, contact support and include your booking reference.</td>
              </tr>
              <tr>
                <td>What if my preferred room is not available?</td>
                <td>If the room type you want is sold out, consider selecting flexible dates or a nearby property. You can also add your email to alerts for availability or contact support for assistance.</td>
              </tr>
            </tbody>
          </table>
        </div>
    </section>
    <div>
        <p class="more-help">Still need help? Visit the <a href="contact.php">Contact</a> page or open a support ticket.</p>
        </div>
    </main>

    <footer> <!-- Footer section -->
      © 2025 BookEase | All Rights Reserved
    </footer>
  </body>
</html>
