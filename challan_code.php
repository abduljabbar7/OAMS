<?php
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // You can retrieve other necessary data from the form submission or session as needed.
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cnic = $_POST["cnic"];
     $amount = 4000;

    // Generate the challan code (you can use uniqid() or any other method)
    $challanCode = "CH" . uniqid();

    // Insert the challan information into the "challans" table
    $sql = "INSERT INTO challan_table (challan_code, name, email, cnic, amount) VALUES ('$challanCode', '$name', '$email', '$cnic', '$amount')";
    mysqli_query($conn, $sql);

    // Provide a link to download the challan as a text file
    echo "<a href='challan.php?challanCode=$challanCode'>Download Challan</a>";
}
?>
