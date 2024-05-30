<?php
session_start();
$email = $_SESSION['email'];
if(!$email){
    echo "not logged";
    header("Location:../redirect/login.php");
    exit();
}
include_once("../redirect/conn.php");

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);


// if (mysqli_num_rows($result) === 1) {
//     $row = mysqli_fetch_assoc($result);
//     if(($row) === 0){
//         echo "hii";

//     }
//     else{
//         echo "helloo";
//     }
//}