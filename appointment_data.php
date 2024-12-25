<?php
// Include the database connection file
include 'db_connection.php';

// Handle deletion (if delete request is made via POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $delete_id = intval($_POST['delete_id']); // Ensure the id is an integer

    // SQL to delete the record
    $delete_sql = "DELETE FROM appointments WHERE id = $delete_id";
    if ($conn->query($delete_sql) === TRUE) {
        echo "<script>alert('Record deleted successfully.');</script>";
        echo "<script>window.location.href = 'appointment_data.php';</script>"; // Redirect to the same page after deletion
        exit;
    } else {
        echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
    }
}

// SQL query to fetch data from the appointments table
$sql = "SELECT * FROM appointments ORDER BY created_at DESC"; // Get the most recent appointments
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eff8ff;
            color: #0e384c;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #0e384c;
            color: #0e384c;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .footer {
            background-color: #111821;
            color: white;
            text-align: center;
            margin-top: 50px;
            padding: 10px;
        }

        .header {
            background-color: #0e384c;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px; /* Space between buttons */
        }
        .mainContainer{
            width: 95%;
            background-color: whitesmoke;
            padding: 20px;
        }
        form {
            display: inline-block;
        }
    </style>
</head>

<body>

<div class="header">
    <h2>Dental Care - Appointment Records</h2>
</div>

<div class="container-fluid mainContainer mt-5">
    <h1>Recently Booked Appointments</h1>

    <!-- Check if there are any results -->
    <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Service</th>
                    <th>Before Medicine</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Comments</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['first_name']; ?></td>
                        <td><?= $row['last_name']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['phone']; ?></td>
                        <td><?= $row['service']; ?></td>
                        <td><?= $row['before_medicine']; ?></td>
                        <td><?= $row['city']; ?></td>
                        <td><?= $row['state']; ?></td>
                        <td><?= $row['comments']; ?></td>
                        <td><?= $row['created_at']; ?></td>
                        <td>
                            <div class="action-buttons">
                                <!-- Edit Button -->
                                <a href="edit_appointment.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                <!-- Delete Button -->
                                <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                    <input type="hidden" name="delete_id" value="<?= $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="text-center">No appointments found.</p>
    <?php endif; ?>
</div>

<div class="footer">
    <p>&copy; 2024 Dental Care. All Rights Reserved.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
