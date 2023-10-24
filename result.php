<?php
// Include the database connection file
include 'db_connection.php';
if (isset($_POST['test'])) {
    $cnic = $_POST['cnic'];
    // Use prepared statements to avoid SQL injection
    $sql = "SELECT id, user_identifier, total_questions_attempted, total_score FROM quiz_users WHERE user_identifier = $cnic";
    $result = $conn->query($sql);
        // Check if there are any results
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr bgcolor='lightgreen'><th>Student Id</th><th>Student Cnic</th><th>Total Question</th><th>Total Marks</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr bgcolor='lightblue'>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["user_identifier"] . "</td>";
                echo "<td>" . $row["total_questions_attempted"] . "</td>";
                echo "<td>" . $row["total_score"] . "</td>";
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
<?php
// Include the database connection file
include 'db_connection.php';
if (isset($_POST['admin_result'])) {
    // Use prepared statements to avoid SQL injection
    $sql = "SELECT id, user_identifier, total_questions_attempted, total_score FROM quiz_users";
    $result = $conn->query($sql);
        // Check if there are any results
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr bgcolor='lightgreen'><th>Student Id</th><th>Student Cnic</th><th>Total Question</th><th>Total Marks</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr bgcolor='lightblue'>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["user_identifier"] . "</td>";
                echo "<td>" . $row["total_questions_attempted"] . "</td>";
                echo "<td>" . $row["total_score"] . "</td>";
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
