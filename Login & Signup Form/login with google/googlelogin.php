<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the Google Sign-In data
    // Assuming $_SESSION["googleUserData"] is the array you're working with
    if (isset($_SESSION["googleUserData"])) {
        // Access the array element
        $googleUserData = $_SESSION["googleUserData"];
        // Now you can use $googleUserData without causing the "Undefined array key" error

        // Example: Output Google User Data
        echo "Google User Data: ";
        print_r($googleUserData);
    } else {
        echo "Google User Data not found in the session.";
    }
}
?>
