<?php
//require('../PHPMailer/src/PHPMailer.php');
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["userEmail"];
    // Check if the email exists in the database
    $sql = "SELECT * FROM register WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Generate a random password reset token
        $resetToken = bin2hex(random_bytes(32));

        // Store the reset token in the database
        $sql = "UPDATE register SET reset_token = '$resetToken' WHERE email = '$email'";
        $conn->query($sql);

        // Send an email to the user with a link to reset their password
        $resetLink = "http://localhost/project/student/reset_password.php?token=" . urlencode($resetToken);
        $emailBody = "Click the following link to reset your password: $resetLink";
        // Send the email using a mail library or a service like PHPMailer
        // Use a library like PHPMailer or a mail service to send the email here
        // Example using PHPMailer:
       //  $mail = new PHPMailer;
        // ... Configure and send the email ...

        echo "An email with instructions to reset your password has been sent to your email address.";
    } else {
        echo "No user found with that email address.";
    }
}
?>
