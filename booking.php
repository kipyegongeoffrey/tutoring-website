<?php
session_start();
include 'db.php';

$subject = $_POST['subject'];
$date = $_POST['date'];
$time = $_POST['time'];
$user_name = $_SESSION['user_name'];

// Save booking to the database
$sql = "INSERT INTO bookings (user_name, subject, date, time) VALUES ('$user_name', '$subject', '$date', '$time')";

if (mysqli_query($conn, $sql)) {
    echo "Your session has been booked successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>