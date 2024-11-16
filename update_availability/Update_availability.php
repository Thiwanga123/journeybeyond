<?php
// File: update_availability.php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

// Establish connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $availability = $_POST['availability'];
    $date = $_POST['date'];
    $guider_id = 1; // Replace with the actual guider ID from session or form input

    // Update query
    $sql = "UPDATE guider_availability SET availability='$availability', date='$date' WHERE guider_id='$guider_id'";
    
    // Execute and send JSON response
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $conn->error]);
    }
}

$conn->close();
?>
