<?php 

   session_start();
   include "../conn.php";
   if(!isset($_SESSION['email'])) {
    // If user is not logged in, redirect to login page
    header("Location: ../auth/index.php?error=Please login to View Page");
    exit();
    }
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    $name =$user['name']; 
    $email = $user['email'];

     
?>