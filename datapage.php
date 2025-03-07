<?php
// Database connection
$servername = "localhost";
$username = "jamey";
$password = "trident";
$dbname = "jamey_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve all data from the users table
$result = $conn->query("SELECT * FROM users");

if ($result->num_rows > 0) {
    // Display data in a table format
    echo "<table border='1'>
            <tr>
                <th>Email</th>
                <th>Age Range</th>
                <th>Gender</th>
                <th>Hobby</th>
                <th>Hobby Hours</th>
            </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row["email"]) . "</td>
                <td>" . htmlspecialchars($row["age_range"]) . "</td>
                <td>" . htmlspecialchars($row["gender"]) . "</td>
                <td>" . htmlspecialchars($row["hobby"]) . "</td>
                <td>" . htmlspecialchars($row["hobby_hours"]) . "</td>
              </tr>";
    }
    echo "</table>";
}
// Close connection
$conn->close();
?>
