<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once('conn.php');


$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
  $query = "SELECT * FROM signup WHERE username = '$name'";
  $sqlQuery = mysqli_query($conn,$query);
  $data = mysqli_fetch_array($sqlQuery);
  if($data && $data['password']==$password ){
      echo "valid user <br> ";
  }
  else{
      echo "invalid user";
  }
  echo $data['username'];
?>