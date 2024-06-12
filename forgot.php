<?php

// forgot-password.php
if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['Email'];
    // Check if email exists in the database
    // Generate a unique token
    // Store the token in the database with a timestamp
    // Send an email to the user with the reset link
}

include_once('conn.php');

// send-reset-link.php
$to = $email;
$subject = "Password";
// Use mail() or PHPMailer to send the email




// reset-password-process.php
if (isset($_REQUEST['Password'])) {
    $new_password = $_REQUEST['new_password'];
    header("Location:login.html");
    // Hash the new password
    // Update the password in the database
    // Redirect to the login page or inform the user of success
}

$update = "SELECT INTO employee1 set Password = $new_password WHERE Email = $email";

$conn->query($update);


?>