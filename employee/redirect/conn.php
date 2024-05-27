<?php

$host = 'localhost'; // or '127.0.0.1'
$username = 'root'; // default username for XAMPP MySQL
$password = ''; // default password for XAMPP MySQL (empty by default)
$database = 'ems'; // replace 'your_database_name' with the actual database name

// Create a connection to the MySQL database
$conn = new mysqli($host, $username, $password, $database);



?>