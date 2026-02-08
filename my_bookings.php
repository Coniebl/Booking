<?php 
require 'require_auth.php'; 
require 'config.php';       

$user_email = $_SESSION['email'];
$stmt = $conn->prepare("SELECT id, name, number_pax, booking_date, email, contact_number FROM bookings WHERE email = ? ORDER BY booking_date DESC");
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
    <script defer src="script.js"></script>
  </head>

  <body class="page-my-bookings">
    <header>
      <div id="header-left-side">
        <img src="./assets/logo.png" alt="BookEase Logo" />
        <h1 class="headertitle">BookEase</h1>
      </div>
      <nav id="icons">
        <a href="home.php" class="nav-link">Home</a>
        <a href="services.php" class="nav-link">Services</a>
        <a href="contact.php" class="nav-link">Contact</a>
        <a href="my_bookings.php" class="nav-link active">My Bookings</a>
        <a href="logout.php" id="logout-link">Logout</a>
      </nav>
    </header>

    <main class="help-main">
      <section class="help-hero">
        <h1>Manage Your Bookings</h1>
        <p>You can view or update your reservation details here.</p>
      </section>

      <section class="faq-section">
        <div class="table-wrap">
          <table class="faq-table">
            <thead>
              <tr>
                <th>Full Name</th>
                <th>Pax</th>
                <th>Date</th>
                <th>Contact</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                  <tr>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['number_pax']) ?></td>
                    <td><?= htmlspecialchars($row['booking_date']) ?></td>
                    <td><?= htmlspecialchars($row['contact_number']) ?></td>
                    <td>
                      <button class="edit-btn" 
                              data-id="<?= $row['id'] ?>"
                              data-name="<?= htmlspecialchars($row['name']) ?>"
                              data-pax="<?= $row['number_pax'] ?>"
                              data-date="<?= $row['booking_date'] ?>"
                              data-phone="<?= htmlspecialchars($row['contact_number']) ?>">
                        Edit
                      </button>
                    </td>
                  </tr>
                <?php endwhile; ?>
              <?php else: ?>
                <tr>
                  <td colspan="5" style="text-align: center;">No bookings found.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </section>
    </main>

    <div id="editPopup" class="popup">
      <div class="popup-content">
        <h2>Update Reservation</h2>
        <form id="edit-booking-form">
          <input type="hidden" id="edit_id" name="id">
          
          <label for="edit_name">Full Name</label>
          <input type="text" id="edit_name" name="pax_name" required>

          <label for="edit_pax">Number of Pax</label>
          <input type="number" id="edit_pax" name="pax_count" required min="1">

          <label for="edit_date">Booking Date</label>
          <input type="date" id="edit_date" name="booked_dates" required>

          <label for="edit_phone">Contact Number</label>
          <input type="tel" id="edit_phone" name="pax_phone" required>

          <div class="form-buttons">
            <button type="submit" class="book-now-btn">Save Changes</button>
            <button type="button" id="closeEditPopup" class="cancel-btn">Cancel</button>
          </div>
        </form>
      </div>
    </div>

    <footer>© 2025 BookEase | All Rights Reserved</footer>
  </body>
</html>
<?php 
$stmt->close();
$conn->close(); 
?>