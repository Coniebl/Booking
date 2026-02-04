<?php
session_start();

require_once 'config.php';



if(isset($_POST['signup'])){
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)){
        $_SESSION['signup_error'] = "Email and password are required!";
        $_SESSION['active_form'] = 'signup';
        header("Location: index.php");
        exit();

    }



    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");

    $stmt->bind_param("s", $email);

    $stmt->execute();

    $stmt->store_result();

    if ($stmt->num_rows > 0){

        $_SESSION['signup_error'] = "Email already exists!";

        $_SESSION['active_form'] = 'signup';

        $stmt->close();

        header("Location: index.php");

        exit();

    }

    $stmt->close();



    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");

    $stmt->bind_param("ss", $email, $hashed);

    if (!$stmt->execute()){

        $_SESSION['signup_error'] = "Signup failed, please try again.";

        $_SESSION['active_form'] = 'signup';

        $stmt->close();

        header("Location: index.php");

        exit();

    }

    $stmt->close();



    $_SESSION['email'] = $email; // Comment this out so they aren't logged in yet 
    $_SESSION['login_error'] = "Signup successful! Please log in to your account."; 
    $_SESSION['active_form'] = 'login'; header("Location: index.php"); // This sends them back to the login page
    exit();
}





if(isset($_POST['login'])){

    $email = trim($_POST['email'] ?? '');

    $password = $_POST['password'] ?? '';



    if (empty($email) || empty($password)){

        $_SESSION['login_error'] = "Email and password are required!";

        $_SESSION['active_form'] = 'login';

        header("Location: index.php");

        exit();

    }

    $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($hash);

    if ($stmt->fetch()){
        if (password_verify($password, $hash)){
            $_SESSION['email'] = $email;
            $stmt->close();
            header("Location: home.php"); // SUCCESS: Go to home
            exit();
        }
    }
    $stmt->close();

    $_SESSION['login_error'] = "Invalid email or password!";
    $_SESSION['active_form'] = 'login';
    header("Location: index.php"); // FAILURE: Go back to login
    exit();
}
?>

