<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['student_name'];
        $date = $_POST['session_date'];
        $time = $_POST['session_time'];

        // Save to database or email the details
        echo "Thank you, " . $name . ". Your session is booked for " . $date . " at " . $time . ".";
    }
?>