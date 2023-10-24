<?php
// Include the database connection file
include 'db_connection.php';
// SQL query to select all records from the 'applications' table
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table border = '1'>";
    echo "<tr bgcolor = 'red'><th>Name</th><th>Fanther Name</th><th>Cnic</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr bgcolor = 'lightblue'>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["fname"] . "</td>";
        echo "<td>" . $row["CNIC"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}
// Close the database connection
$conn->close();
?>