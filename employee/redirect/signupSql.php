<?php


$username = $_REQUEST["username"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$cpassword = $_REQUEST["cpassword"];

$host = "localhost";
$username = "root";
$password = "";
$database = "ems";

$conn = new mysqli($host, $username, $password, $database);


$insert ="INSERT INTO register (username,email,password,cpassword) values ('$username','$email','$password','$cpassword')";

$conn->query($insert);
echo "valid user <br> ";
    header("Location: login.php");

?>