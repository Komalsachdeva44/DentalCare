<?php
$servername = "localhost"; // Database server
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "dentalcare";  // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
