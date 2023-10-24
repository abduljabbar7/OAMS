<?php
// Include the database connection file
include 'db_connection.php';
// SQL query to select all records from the 'applications' table
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table border = '1'>";
    echo " Personal detail";
    echo "<tr bgcolor = 'red'><th>Name</th><th>Student Cnic</th><th>mobile</th><th>file_cnic</th><th>surname</th><th>dob</th><th>religion</th><th>Father Name</th><th>Father Cnic</th><th>Father Mobile</th><th>file_fcnic</th><th>district</th><th>domicile</th><th>postal_address</th><th>group</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr bgcolor = 'skyblue'>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["CNIC"] . "</td>";
        echo "<td>" . $row["mobile"] . "</td>";
        echo "<td>" . $row["file_cnic"] . "</td>";
        echo "<td>" . $row["surname"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["religion"] . "</td>";
        echo "<td>" . $row["fname"] . "</td>";
        echo "<td>" . $row["fcnic"] . "</td>";
        echo "<td>" . $row["fmobile"] . "</td>";
        echo "<td>" . $row["file_fcnic"] . "</td>";
        echo "<td>" . $row["district"] . "</td>";
        echo "<td>" . $row["domicile"] . "</td>";
        echo "<td>" . $row["postal_address"] . "</td>";
         echo "<td>" . $row["group"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>
<?php
// Include the database connection file
include 'db_connection.php';
// SQL query to select all records from the 'applications' table
$sql = "SELECT * FROM education";
$result = $conn->query($sql);
// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table border = '1'>";
    echo "education detail";
    echo "<tr bgcolor = 'red'><th>sscii_seat_no</th><th>Student Cnic</th><th>sscii_Obtained_Marks</th><th>sscii_Total_Marks</th><th>sscii_Passing_Year</th><th>sscii_Grade</th><th>sscii_Board</th><th>sscii_sheet</th><th>hsci_Seat_No</th><th>hsci_Obtained_Marks</th><th>hsci_Total_Marks</th><th>hsci_Passing_Year</th><th>hsci_Grade</th><th>hsci_Board</th><th>hsci_sheet</th><th>hscii_Seat_No</th><th>hscii_Obtained_Marks</th><th>hscii_Total_Marks</th><th>hscii_Passing_Year</th><th>hscii_Grade</th><th>hscii_Board</th><th>hscii_sheet</th><th>dae_Seat_No</th><th>dae_Obtained_Marks</th><th>dae_Total_Marks</th><th>dae_Passing_Year</th><th>dae_Grade</th><th>dae_Board</th><th>dae_sheet</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr bgcolor = 'skyblue'>";
        echo "<td>" . $row["sscii_Seat_No"] . "</td>";
        echo "<td>" . $row["CNIC"] . "</td>";
        echo "<td>" . $row["sscii_Obtained_Marks"] . "</td>";
        echo "<td>" . $row["sscii_Total_Marks"] . "</td>";
        echo "<td>" . $row["sscii_Passing_Year"] . "</td>";
        echo "<td>" . $row["sscii_Grade"] . "</td>";
        echo "<td>" . $row["sscii_Board"] . "</td>";
        echo "<td>" . $row["sscii_sheet"] . "</td>";
        echo "<td>" . $row["hsci_Seat_No"] . "</td>";
        echo "<td>" . $row["hsci_Obtained_Marks"] . "</td>";
        echo "<td>" . $row["hsci_Total_Marks"] . "</td>";
        echo "<td>" . $row["hsci_Passing_Year"] . "</td>";
        echo "<td>" . $row["hsci_Grade"] . "</td>";
        echo "<td>" . $row["hsci_Board"] . "</td>";
         echo "<td>" . $row["hsci_sheet"] . "</td>";
         echo "<td>" . $row["hscii_Seat_No"] . "</td>";
         echo "<td>" . $row["hscii_Obtained_Marks"] . "</td>";
         echo "<td>" . $row["hscii_Total_Marks"] . "</td>";
        echo "<td>" . $row["hscii_Passing_Year"] . "</td>";
        echo "<td>" . $row["hscii_Grade"] . "</td>";
        echo "<td>" . $row["hscii_Board"] . "</td>";
         echo "<td>" . $row["hscii_sheet"] . "</td>";
          echo "<td>" . $row["dae_Seat_No"] . "</td>";
         echo "<td>" . $row["dae_Obtained_Marks"] . "</td>";
         echo "<td>" . $row["dae_Total_Marks"] . "</td>";
        echo "<td>" . $row["dae_Passing_Year"] . "</td>";
        echo "<td>" . $row["dae_Grade"] . "</td>";
        echo "<td>" . $row["dae_Board"] . "</td>";
         echo "<td>" . $row["dae_sheet"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>