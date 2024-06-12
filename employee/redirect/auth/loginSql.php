<?php  

//login login 
session_start();
include "../conn.php";

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$role = $_REQUEST['role'];

if(!$email || !$password){
    header("Location: ../login.php");
	exit();
}
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
   

echo $row['role'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // Verifying the password
    if ( $password == $row['password']) {
        // Password is correct
        $_SESSION['email'] = $row['email']; 
        $_SESSION['role'] = $row['role'];
        if(strtolower($row['role']) == 'employee') {
       
             header("Location: ../../frontendpages/sample.php");
         }
         else{
             header("Location:../../../Admin/frontendpages/sample.php");
         }
         exit();
       // header("Location: ../../frontendpages/sample.php");     
       // exit();
    } else {
        // Incorrect password
        header("Location: ../login.php?error=Incorrect username or password");
        exit();
    }

   
} else {
    // Incorrect password
    header("Location: ../../auth/index.php?error=Incorrect username or password");
    exit();
}




