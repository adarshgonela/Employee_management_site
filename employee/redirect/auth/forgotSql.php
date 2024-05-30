<?php
session_start();
$email = $_SESSION['email'];
if(!$email){
    echo "not logged";
    header("Location:../redirect/login.php");
    exit();
}
include("../conn.php");

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

// $user = mysqli_fetch_assoc($result);
$row = mysqli_fetch_assoc($result);

// if (mysqli_num_rows($result) === 1) {
    
    if(($row) === 0){
        echo "hii";
        header("Location:../forgot2.php");
    }
     else{
         echo "helloo";
         header("Location:../login.php");
     }

?>