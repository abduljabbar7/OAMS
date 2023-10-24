<?php
include 'db_connection.php';
//require_once __DIR__ . '/../vendor/autoload.php';
require_once '../vendor/autoload.php';

// Make sure to adjust the path to autoload.php as per your project structure

// Assuming you already have an established database connection ($db_conn)
// Ensure that you have proper error handling in your actual code.

if (isset($_GET["challanCode"])) {
    $challanCode = $_GET["challanCode"];

    // Fetch the challan information from the database
    $sql = "SELECT name, email FROM challan_table WHERE challan_code = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $challanCode);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $challan_data = mysqli_fetch_assoc($result);

        // Generate the HTML content for the challan
        $html = '
        <!DOCTYPE html>
        <html>
        <head>
            <title>Challan</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                }
                .monogram {
                    display: block;
                    width: 100px;
                    height: 100px;
                    background-color: #007bff;
                    color: #fff;
                    font-size: 30px;
                    text-align: center;
                    line-height: 100px;
                    margin: 0 auto;
                }
                .challan-details {
                    margin-top: 20px;
                    text-align: center;
                }
                .challan-details p {
                    font-size: 18px;
                }
            </style>
        </head>
        <body>
            <div class="monogram">Your Monogram</div>
            <div class="challan-details">
                <p>Challan Code: ' . $challanCode . '</p>
                <p>Student Name: ' . $challan_data["name"] . '</p>
                <p>Student Email: ' . $challan_data["email"] . '</p>
                <!-- Add more challan details here as needed -->
            </div>
        </body>
        </html>
        ';

        // Use mpdf to convert HTML to PDF
       $mpdf = new \Mpdf\Mpdf();
       $mpdf->WriteHTML($html);

        // Output the PDF for download
        $mpdf->Output("challan_" . $challanCode . ".pdf", "D");
        exit();
    } else {
        echo "Challan not found.";
    }
}
?>
