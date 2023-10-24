<?php
$host = "localhost"; // Hostname
$username = "root";  // MySQL username
$password = "";  // MySQL password
$database = "oams";  // Database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
