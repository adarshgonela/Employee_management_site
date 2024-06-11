<?php

$Id =$_REQUEST['ID'];
$name =$_REQUEST['Name'];
$email =$_REQUEST['Email'];
$password =$_REQUEST['Password'];
$dob =$_REQUEST['DOB'];
$mobile =$_REQUEST['PhoneNo'];
$address =$_REQUEST['Address'];
$salary =$_REQUEST['Salary'];
$role = $_REQUEST['role'];


$host = "localhost";
$username="root";
$password="";
$database="test";

$conn = new mysqli($host,$username,$password,$database);
$insert = "INSERT INTO Employee(Id,Name,Email,Password,DOB,PhomeNo,Address,Salary,Role)
 values ('$id','$name','$email','$password','$dob','$mobile','address','$salary','$roles')";

$conn->query($insert);

header("Location: signup.html");

?>

