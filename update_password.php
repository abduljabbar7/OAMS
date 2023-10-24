<?php
include 'db_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $resetToken = $_POST["token"];
    $newPassword = $_POST["new_password"];

    // Update the password for the user with the given reset token
    $sql = "UPDATE users SET password = '$newPassword', reset_token = NULL WHERE reset_token = '$resetToken'";
    $conn->query($sql);

    echo "Your password has been successfully updated.";
}
?>
