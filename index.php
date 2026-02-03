<?php
session_start();

// If already logged in, skip the login page
if (isset($_SESSION['email'])) {
    header("Location: home.php");
    exit();
}

$errors = [
  'log-in' => $_SESSION['login_error'] ?? null,
  'sign-up' => $_SESSION['signup_error'] ?? null
];
$activeForm = $_SESSION['active_form'] ?? 'login';

// ONLY clear errors, do not unset the whole session!
unset($_SESSION['login_error']);
unset($_SESSION['signup_error']);
unset($_SESSION['active_form']);

function showError($error) {
  return !empty($error) ? "<p class='error-message'>".$error.'</p>':'';
}
function isActive($forName, $activeForm) {
  return $forName === $activeForm ? "active" : "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookEase - Login</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
</head>
<body>
  <header>
    <div id="header-left-side">
      <img src="./assets/logo.png" alt="Logo" />
      <h1 class="headertitle">BookEase</h1>
    </div>
  </header>

  <main id="login-section">
    <div id="content-wrapper">
      <div id="tagline">
        <h2>Book Smart,</h2>
        <h2>Stay Easy.</h2>
        <h1>ONLY WITH BOOKEASE!</h1>
      </div>
  
      <div class="form-box <?= isActive('login', $activeForm) ?>" id="login-box">
        <h2>Login</h2>
        <?= showError($errors['log-in']) ?>
        <form action="login_signup.php" method="post">
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter your email" required>
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <button type="submit" name="login">Login</button>
        </form>
        <p class="signup-text">Don’t have an account? <a href="#" onclick="showForm('signup-box')">Sign up</a></p>
      </div>

      <div class="form-box <?= isActive('signup', $activeForm) ?>" id="signup-box">  
        <h2>Sign Up</h2>
        <?= showError($errors['sign-up']) ?>
        <form action="login_signup.php" method="post">
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter your email" required>
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <button type="submit" name="signup">Sign Up</button>
        </form>
        <p class="signup-text">Already have an account? <a href="#" onclick="showForm('login-box')">Login</a></p>
      </div>
    </div>
  </main>
  <footer>© 2025 BookEase | All Rights Reserved</footer>
</body>
</html>

