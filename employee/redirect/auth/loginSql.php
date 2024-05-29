<?php session_start();
// Get user input
$email = $_REQUEST['email'];
$passkey = $_REQUEST['password'];

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "ems";

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$query = "SELECT * FROM register WHERE email = ? AND password = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $passkey);
$stmt->execute();
$result = $stmt->get_result();

// Check if any rows are returned
if ($result->num_rows > 0) {
  $_SESSION['email2']=$data['email'];
  $_SESSION['password1']=$data['password'];

    // Authentication successful
    header("Location: index.html");
    exit();
} else {
    // Authentication failed
    echo "Invalid email or password";
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
