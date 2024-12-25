<?php
// Include the database connection file
include 'db_connection.php';

// Check if ID is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record
    $sql = "SELECT * FROM appointments WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found.";
        exit;
    }
} else {
    echo "Invalid Request.";
    exit;
}

// Update the record
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $before_medicine = $_POST['before_medicine'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $comments = $_POST['comments'];

    $sql = "UPDATE appointments SET 
            first_name='$first_name', 
            last_name='$last_name', 
            email='$email', 
            phone='$phone', 
            service='$service', 
            before_medicine='$before_medicine', 
            city='$city', 
            state='$state', 
            comments='$comments' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: appointment_data.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Appointment</h1>
    <form method="POST">
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $row['first_name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $row['last_name']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $row['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $row['phone']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="service" class="form-label">Service</label>
            <input type="text" class="form-control" id="service" name="service" value="<?= $row['service']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="before_medicine" class="form-label">Before Medicine</label>
            <select class="form-control" id="before_medicine" name="before_medicine" required>
                <option value="Yes" <?= $row['before_medicine'] == 'Yes' ? 'selected' : ''; ?>>Yes</option>
                <option value="No" <?= $row['before_medicine'] == 'No' ? 'selected' : ''; ?>>No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" value="<?= $row['city']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" id="state" name="state" value="<?= $row['state']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="comments" class="form-label">Comments</label>
            <textarea class="form-control" id="comments" name="comments" rows="3"><?= $row['comments']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <!-- <a href="appointments.php" class="btn btn-secondary">Cancel</a> -->
    </form>
</div>
</body>
</html>
