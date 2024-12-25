<?php
// Include the database connection file
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);

    // Insert data into the table
    $sql = "INSERT INTO contact_data (name, email, phone, comments) 
            VALUES ('$name', '$email', '$phone', '$comments')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a thank-you page or back to the form
        header("Location: thankyou.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
