<?php
session_start();

$email = $_REQUEST['email'];


if (!isset($_POST['email'])) {
    $email=$_POST['email'];

}

include("../conn.php");
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($email == $row['email']) {

    header("Location: ../forgot2.php ? email=".$email);
} else {

    header("Location: ../login.php? incorrect email enter valid email");
    exit();
}
