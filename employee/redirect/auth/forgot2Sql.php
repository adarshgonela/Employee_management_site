<?php
session_start();
include('../conn.php');
$email1 = $_GET["email"];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];

if ($password === $cpassword) {
    $sql = "UPDATE users SET password='$password' WHERE email='$email1'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:../login.php ? password updated successfully");
        exit;
    }
} else {
 
    header("Location:../forgot.php ? enter both password same");
}
