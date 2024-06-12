<?php  

//login login 
session_start();
include "../conn.php";

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if(!$email || !$password){
    header("Location: ../login.php");
	exit();
}


$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // Verifying the password
    if ( $password == $row['password']) {
        // Password is correct
        $_SESSION['email'] = $row['email']; 


        $sql = "SELECT * FROM attendance WHERE email='$email' and date='$date'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 0) {

            $insert_data = "INSERT INTO attendance ( `email`, `date`,`firstLogin`) VALUES ('$email', '$date', '$present')";
            mysqli_query($conn, $insert_data);
        }


        header("Location: ../../frontendpages/sample.php");     
        exit();
    } else {
        // Incorrect password
        header("Location: ../login.php?error=Incorrect username or password");
        exit();
    }
} else {
    // User not found
    header("Location: ../login.php?error=Incorrect username or password");
    exit();
}

