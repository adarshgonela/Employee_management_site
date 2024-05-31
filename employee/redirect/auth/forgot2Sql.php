<?php
session_start();
include('../conn.php');
$email = $_SESSION['email'];

$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];


if ($password === $cpassword) {
    $sql = "UPDATE users SET password='$password' WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location:../login.php ? password updated successfully");
        exit;
    }
} else {
    header("Location:../forgot2.php ? enter both password same");
}
