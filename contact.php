<?php require 'require_auth.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Responsive design meta tag -->
    <title>BookEase - Contact</title> <!-- Page title na makita sa tab sa ibabaw-->
    <link rel="icon" type="image/png" href="./assets/logo.png" /> <!-- icon or logo na akita again sa tab -->
    <link rel="stylesheet" href="style.css" /> <!-- Link para sa external CSS file -->
    <script defer src="script.js"></script> <!-- Link para sa external JavaScript file -->
  </head>
  <body class="page-contact">
    <a class="skip-link" href="#main-content">Skip to content</a> <!-- Accessibility skip link -->

    <header>
      <div id="header-left-side">
        <img src="./assets/logo.png" alt="BookEase Logo" /> <!-- Logo image sa left side sa header -->
        <h1 class="headertitle">BookEase</h1> <!-- Website title sa header -->
      </div>

      <!--Navigation Bar-->
      <nav id="icons" aria-label="Primary navigation"> 
        <a href="home.php" class="nav-link">Home</a> <!-- Link to home page -->
        <a href="services.php" class="nav-link">Services</a> <!-- Link to services page -->
        <a href="contact.php" class="nav-link active">Contact</a> <!-- Link to contact page but naa nata currently ari-->
        <a href="my_bookings.php" class="nav-link">My Bookings</a> <!-- Link to help page -->
        <a href="logout.php" id="logout-link">Logout</a> <!-- Link to logout -->
      </nav>
    </header>

    <main id="main-content" class="contact-main" role="main"> <!-- Ari na part ang introductory text tahay -->
      <section class="contact-section">
        <h1>Have questions in mind?</h1>
        <p>
          We’re here to help! Reach out to us directly through our support page or
          contact one of our trusted partners below.
        </p>
      </section>

      <section class="faq-section">
        <h3>Frequently Asked Questions</h3>

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
        <p class="more-help">Still need help? Open a support ticket.</p>
    </div>

      <section class="contact-block" aria-labelledby="support-title"> <!-- Contact block section with aria-labelledby for accessibility tahay-->
        <h2 id="support-title">Contact Our Support Team</h2>

        <!-- nag use kog iframe para sa support page para tahay naa koy iframe-->
        <div class="iframe-wrapper" aria-hidden="false">
          <iframe
            src="https://partnerhub.agoda.com/contacting-us-for-support/"
            title="Partner support page"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            sandbox="allow-forms allow-scripts allow-same-origin allow-popups"
          ></iframe>
        </div>

        <p>If the interactive page above doesn't load, you can open it directly:</p>
        <p>
          <a href="https://partnerhub.agoda.com/contacting-us-for-support/" target="_blank" rel="noreferrer noopener">Click here!</a> <!-- link sa Agoda, since wa koy webiste for support-->
        </p>

        <!-- If not working ang iframe, naay form for their concerns -->
        <form class="contact-form" method="post" aria-label="Contact form">
          <label for="name">Your name</label>
          <input id="name" name="name" type="text" placeholder="Full name" />

          <label for="email">Email</label>
          <input id="email" name="email" type="email" placeholder="you@example.com" />

          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" placeholder="How can we help?"></textarea>

          <button type="submit">Send message</button>
        </form>
      </section>
    </main>

    <footer> <!-- Footer section -->
      © 2025 BookEase | All Rights Reserved
    </footer>
  </body>
</html>