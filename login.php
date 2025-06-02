<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Get user from database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_name'] = $user['name'];
        echo "Login successful. Welcome, " . $_SESSION['user_name'] . "!";
        // Redirect to dashboard page if needed
        // header("Location: dashboard.php");
    } else {
        echo "Incorrect password.";
    }
} else {
    echo "No user found with that email.";
}

mysqli_close($conn);
?>