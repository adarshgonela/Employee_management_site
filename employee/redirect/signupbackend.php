<?php
$Id =$_REQUEST['ID'];
$name =$_REQUEST['Name'];
$email =$_REQUEST['Email'];
$password =$_REQUEST['Password'];
$dob =$_REQUEST['DOB'];
$mobile =$_REQUEST['PhoneNo'];
$address =$_REQUEST['Address'];
$salary =$_REQUEST['Salary'];

include_once("conn.php");

$insert = "INSERT INTO employee1(ID,Name,Email,Password,DOB,PhoneNo,Address,Salary)
 values ('$Id','$name','$email','$password','$dob','$mobile','address','$salary')";

$conn->query($insert);

header('Location: signup.php');
?>