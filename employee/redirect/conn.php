<?php  
date_default_timezone_set("Asia/Calcutta");

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "ems";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}

<<<<<<< HEAD
// function input($key) {
// 	global $_REQUEST;
// 	if(isset($_REQUEST[$key]) && $_REQUEST[$key] && trim($_REQUEST[$key])!=""){
// 		return trim($_REQUEST[$key]);
// 	}
// 	return null;
// }
=======

>>>>>>> e3b6cb6b0131a62f0c5471263d2ab80f90da806e

$logoutLimit = 10;
$present = date('H:i');
$date = date('Y-m-d');

