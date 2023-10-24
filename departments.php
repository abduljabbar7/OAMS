<?php
include 'db_connection.php';
if (isset($_POST['submit'])) {
    $cnic = $_POST['cnic'];
    $sscii_Seat_No = $_POST['SSCII_Seat_No'];
    $departments = $_POST['departments'];
    if (mysqli_connect_error()) {
        die('Connection error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
    } else {
        $SELECT = "SELECT departments FROM departments WHERE departments = ? LIMIT 1";
        $INSERT = "INSERT INTO departments (CNIC, sscii_Seat_No, departments) VALUES ((SELECT CNIC FROM student WHERE CNIC = $cnic), (SELECT sscii_Seat_No FROM education WHERE sscii_Seat_No = $sscii_Seat_No), ?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $departments);
        $stmt->execute();
        $stmt->bind_result($departments);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("s", $departments); // Bind all parameters
            $stmt->execute();
            header("location: ../student/datatables.php");
        } else {
            echo "You are already enrolled.";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<?php
// Include the database connection file
// include 'db_connection.php';
// // SQL query to select all records from the 'applications' table
// if (isset($_POST['ubmit'])) { 
// $sql = "SELECT * FROM departments";
// $result = $conn->query($sql);

// // Check if there are any results
// if ($result->num_rows > 0) {
//     echo "<table border = '1'>";
//     echo "<tr bgcolor = 'red'><th>dept_id</th><th>department</th></tr>";
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr bgcolor = 'lightblue'>";
//         echo "<td>" . $row["dept_id"] . "</td>";
//         echo "<td>" . $row["department"] . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// } else {
//     echo "No results found.";
// }

// // Close the database connection
// $conn->close();
// }
?>