<?php
// Include the database connection file
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Capturing form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$before_medicine = $_POST['before_medicine']; // Capturing radio button value
$city = $_POST['city'];
$state = $_POST['state'];
$comments = $_POST['comments'];

// SQL query to insert data into the database
$sql = "INSERT INTO appointments (first_name, last_name, email, phone, service, before_medicine, city, state, comments) 
        VALUES ('$first_name', '$last_name', '$email', '$phone', '$service', '$before_medicine', '$city', '$state', '$comments')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to the thank-you page
        header("Location: thankyou.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
