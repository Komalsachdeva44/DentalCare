<?php
// Include the database connection file
include 'db_connection.php';

// SQL query to fetch data from the appointments table
$sql = "SELECT * FROM contact_data ORDER BY created_at DESC"; // Get the most recent appointments
$result = $conn->query($sql);

// Start HTML structure
?>
  <?php include './components/header.php'; ?>



    <div class="container mt-5">
      <div class="row">
        <div class="col-12" style="width:100%; overflow:auto">
        <h1>Contact Form Data</h1>

        <!-- Check if there are any results -->
        <?php if ($result->num_rows > 0): ?>
            <table class="customerdata">
                <thead>
                    <tr>
                       
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Comments</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch each row of data
                    while ($row = $result->fetch_assoc()) {
                        // Check if before_medicine is Yes or No and display the corresponding option
                        echo "<tr>
                          
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['phone'] . "</td>
                            <td>" . $row['comments'] . "</td>
                            <td>" . $row['created_at'] . "</td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="text-center">No data found.</p>
        <?php endif; ?>
    </div>

    </div>
      </div>
<br/>
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include './components/footer.php'; ?>


<?php
// Close the database connection
$conn->close();
?>
