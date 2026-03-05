<?php require 'require_auth.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <title>BookEase - Contact</title> 
    <link rel="icon" type="image/png" href="./assets/logo.png" /> 
    <link rel="stylesheet" href="style.css" /> 
    <script defer src="script.js"></script> 
  </head>
  <body class="page-contact">
    <a class="skip-link" href="#main-content">Skip to content</a> 

    <header>
      <div id="header-left-side">
        <img src="./assets/logo.png" alt="BookEase Logo" /> 
        <h1 class="headertitle">BookEase</h1> 
      </div>

      <nav id="icons" aria-label="Primary navigation"> 
        <a href="home.php" class="nav-link">Home</a> 
        <a href="services.php" class="nav-link">Services</a> 
        <a href="contact.php" class="nav-link active">Contact</a> 
        <a href="my_bookings.php" class="nav-link">My Bookings</a> 
        <a href="logout.php" id="logout-link">Logout</a> 
      </nav>
    </header>

    <main id="main-content" class="contact-main" role="main"> 
      <section class="contact-section">
        <h1>Have questions in mind?</h1>
        <p>
          We’re here to help! Reach out to us directly through our support page or
          contact one of our trusted partners below.
        </p>

        <?php if(isset($_SESSION['contact_success'])): ?>
            <p style="color: green; font-weight: bold; margin-top: 20px;">
                <?= $_SESSION['contact_success']; unset($_SESSION['contact_success']); ?>
            </p>
        <?php endif; ?>

        <?php if(isset($_SESSION['contact_error'])): ?>
            <p style="color: red; font-weight: bold; margin-top: 20px;">
                <?= $_SESSION['contact_error']; unset($_SESSION['contact_error']); ?>
            </p>
        <?php endif; ?>
      </section>

      <section class="faq-section">
        <h3>Frequently Asked Questions</h3>
        <div class="table-wrap">
          <table class="faq-table" summary="Frequently asked questions and answers">
            <thead> 
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

      <section class="contact-block" aria-labelledby="support-title"> 
        <h2 id="support-title">Contact Our Support Team</h2>

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
          <a href="https://partnerhub.agoda.com/contacting-us-for-support/" target="_blank" rel="noreferrer noopener">Click here!</a> 
        </p>

<section class="discord-container">
    <div class="chat-header">
        <p>This is the start of your direct support history with BookEase.</p>
    </div>

    <div class="message-history" id="message-history">
        <?php
        require_once 'config.php'; //
        $user_email = $_SESSION['email']; //
        
        $msg_query = "SELECT name, message, created_at FROM contact_messages WHERE email = ? ORDER BY created_at ASC";
        $msg_stmt = $conn->prepare($msg_query);
        
        if ($msg_stmt) {
            $msg_stmt->bind_param("s", $user_email);
            $msg_stmt->execute();
            $msgs = $msg_stmt->get_result();

            if ($msgs->num_rows > 0) {
                while($msg = $msgs->fetch_assoc()) { ?>
                    <div class="discord-message">
                        <div class="avatar">
                            <img src="./assets/user.png" alt="User"> </div>
                        <div class="msg-content">
                            <div class="msg-info">
                                <span class="msg-author"><?= htmlspecialchars($msg['name']) ?></span>
                                <span class="msg-date"><?= date('m/d/Y g:i A', strtotime($msg['created_at'])) ?></span>
                            </div>
                            <div class="msg-text"><?= nl2br(htmlspecialchars($msg['message'])) ?></div>
                        </div>
                    </div>
                <?php }
            } else {
                echo '<p class="empty-chat">No messages yet. Say hello!</p>';
            }
            $msg_stmt->close();
        }
        ?>
    </div>

    <form class="discord-input-area" action="send_message.php" method="post"> <input type="hidden" name="name" value="<?= htmlspecialchars(explode('@', $_SESSION['email'])[0]) ?>">
        <input type="hidden" name="email" value="<?= htmlspecialchars($_SESSION['email']) ?>">
        <textarea name="message" placeholder="Message our support team" required></textarea>
        <button type="submit">Send</button>
    </form>
</section>

      </section>

    <footer> 
      © 2025 BookEase | All Rights Reserved
    </footer>
  </body>
</html>