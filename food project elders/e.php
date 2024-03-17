<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are filled
    if (
        !empty($_POST["name"]) &&
        !empty($_POST["mobile"]) &&
        !empty($_POST["address"]) &&
        !empty($_POST["service"]) &&
        !empty($_POST["size_details"])
    ) {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "website";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Sanitize input data
        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
        $address = mysqli_real_escape_string($conn, $_POST["address"]);
        $service = mysqli_real_escape_string($conn, $_POST["service"]);
        $size_details = mysqli_real_escape_string($conn, $_POST["size_details"]);

        // Perform the SQL query to insert data
        $sql = "INSERT INTO elders (name, mobile, address, service, size_details)
                VALUES ('$name', '$mobile', '$address', '$service', '$size_details')";

        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "All fields are compulsory. Please fill in all the fields.";
    }
}
?>
