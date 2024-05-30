<?php
session_start();
$email = $_SESSION['email'];
echo "hii";
if(!$email){
    
    header("Location:../redirect/login.php");
    exit();
}
include_once("../redirect/conn.php");

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);


header("Location:../redirect/forgot2.php");

?>
