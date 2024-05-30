<?php
session_start();
$email = $_SESSION['email'];
$password = $_SESSION['password'];
echo "hii";
// if(!$email){
//     echo "helloo";
//     header("Location:../redirect/login.php");
//     exit();
// }
include_once("../redirect/conn.php");
echo "hii";
$sql = "UPDATE users set as password='$password' WHERE email='$email'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);


header("Location:../redirect/forgot2.php");

?>
