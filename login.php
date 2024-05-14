<?php
// Get user input
$email = $_REQUEST['Email'];
$passkey = $_REQUEST['Password'];

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "test";

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$query = "SELECT * FROM employee1 WHERE Email = ? AND Password = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $passkey);
$stmt->execute();
$result = $stmt->get_result();

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Authentication successful
    exit();
} else {
    // Authentication failed
    echo "Invalid email or password";
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>