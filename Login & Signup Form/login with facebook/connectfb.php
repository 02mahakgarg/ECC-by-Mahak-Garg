<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "signup";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the user (this is a simple example, not secure)
    $query = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // User is authenticated, redirect to the Facebook login page
        header("Location: https://www.facebook.com");
        exit();
    } else {
        echo "Invalid credentials";
    }

    $dquery = "SELECT * FROM registration donators WHERE email = '$email' AND password = '$password'";
    $dresult = $conn->query($dquery);

    if ($dresult->num_rows > 0) {
        // User is authenticated, redirect to the Facebook login page
        header("Location: https://www.facebook.com");
        exit();
    } else {
        echo "Invalid credentials";
    }

    // Close the connection
    $conn->close();
}
?>
