
<?php
// Include the database connection file
include 'db_connection.php';
if (isset($_POST['download'])) {
    // You can retrieve other necessary data from the form submission or session as needed.
    $cnic = $_POST["cnic"];
// SQL query to select all records from the 'applications' table
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

    // Generate the challan code (you can use uniqid() or any other method)
    $challanCode = "CH" . uniqid();
    mysqli_query($conn, $sql);

    // Provide a link to download the challan as a text file
    echo "<a href='challan.php?challanCode=$challanCode'>Download Challan</a>";
}
?>