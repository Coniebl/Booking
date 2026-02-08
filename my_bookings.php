<?php 
require 'require_auth.php'; // Ensures the user is logged in
require 'config.php';       // Connects to booking_db

// Fetch only the bookings belonging to the currently logged-in user
$user_email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT name, number_pax, booking_date, email, contact_number FROM bookings WHERE email = ? ORDER BY booking_date DESC");
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BookEase - My Bookings</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="./assets/logo.png" />
  </head>

  <body class="page-my-bookings">
    <header>
      <div id="header-left-side">
        <img src="./assets/logo.png" alt="BookEase Logo" />
        <h1 class="headertitle">BookEase</h1>
      </div>
      <nav id="icons" aria-label="Primary navigation">
        <a href="home.php" class="nav-link">Home</a>
        <a href="services.php" class="nav-link">Services</a>
        <a href="contact.php" class="nav-link">Contact</a>
        <a href="my_bookings.php" class="nav-link active">My Bookings</a>
        <a href="logout.php" id="logout-link">Logout</a>
      </nav>
    </header>

    <main class="help-main">
      <section class="help-hero">
        <h1>Your Reserved Bookings</h1>
        <p>Manage and view all your upcoming stays below.</p>
      </section>

      <section class="faq-section">
        <div class="table-wrap">
          <table class="faq-table">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Pax</th>
                <th>Date</th>
                <th>Email</th>
                <th>Contact</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                  <tr>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['number_pax']) ?></td>
                    <td><?= htmlspecialchars($row['booking_date']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['contact_number']) ?></td>
                  </tr>
                <?php endwhile; ?>
              <?php else: ?>
                <tr>
                  <td colspan="5" style="text-align: center;">No bookings found. <a href="services.php">Book now!</a></td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </section>
    </main>

    <footer>
      © 2025 BookEase | All Rights Reserved
    </footer>
  </body>
</html>
<?php 
$stmt->close();
$conn->close(); 
?>