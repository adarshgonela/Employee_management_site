<?php 
session_start();
include ('../conn.php');

// Initialize an array to hold errors
$errors = [];
// If user signup button is clicked
if(isset($_POST['signup'])){
    $name =  $_POST['name'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $cpassword =  $_POST['cpassword'];
   

    // Check if passwords match
    if($password !== $cpassword){
        $errors[] = "Both passwords should match.";
    }

    // Check if email is already registered
    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors[] = "Email already registered.";
    }
    // If no errors, proceed with registration
    if(count($errors) === 0){
        
        $status = "notverified";
        $insert_data = "INSERT INTO users (name, email, password)
                        VALUES ('$name', '$email', '$password')";
        $data_check = mysqli_query($conn, $insert_data);
        // header("Location: ../redirect/signup.php?login successful");
        header("Location:../login.php");
    }
    else{
        header("Location:../signup.php");

    }

}
?>
