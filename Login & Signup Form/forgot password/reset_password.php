<?php
session_start();

// Check if the reset token is present in the session
if (!isset($_SESSION['reset_token'])) {
    header("Location: forgot.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and reset the password
    $newPassword = $_POST['new_password'];

    // Process the password reset (update database, etc.)
    // For simplicity, let's assume we update a session variable
    $_SESSION['reset_password'] = $newPassword;

    // Clear the reset token from the session
    unset($_SESSION['reset_token']);

    echo "Password reset successfully.";
}
?>
