<?php

$host = 'localhost'; // or '127.0.0.1'
$username = 'root'; // default username for XAMPP MySQL
$password = ''; // default password for XAMPP MySQL (empty by default)
$database = 'test'; // replace 'your_database_name' with the actual database name

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Close the connection

?>