<?php

$Id =$_REQUEST['ID'];
$name =$_REQUEST['Name'];
$email =$_REQUEST['Email'];
$password =$_REQUEST['Password'];
$dob =$_REQUEST['DOB'];
$mobile =$_REQUEST['PhoneNo'];
$address =$_REQUEST['Address'];
$salary =$_REQUEST['Salary'];


$host = "localhost";
$username="root";
$password="";
$database="test";

$conn = new mysqli($host,$username,$password,$database);
$insert = "INSERT INTO Employee(Id,Name,Email,Password,DOB,PhomeNo,Address,Salary)
 values ('$id','$name','$email','$password','$dob','$mobile','adress','$salary')";

$conn->query($insert);

header("Location: signup.html");

?>

