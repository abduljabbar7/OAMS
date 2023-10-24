<?php
// Include the database connection file
include 'db_connection.php';
if (isset($_POST['download'])){
    $cnic = $_POST['cnic'];
// SQL query to select all records from the 'applications' table
$sql = "SELECT name, fname, CNIC FROM student WHERE CNIC = $cnic";
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr bgcolor = 'red'><th>Student Name</th><th>Fanther Name</th><th>Student Cnic</th></tr>";
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
}
// Close the database connection
$conn->close();
?>