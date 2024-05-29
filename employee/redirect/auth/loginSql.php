<?php  

//login login 
session_start();
include "../conn.php";

$email = input('email');
$password = input('password');

if(!$email || !$password){
	exit();
}


$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);

    // Verifying the password
    if (password_verify($password, $row['password'])) {
        // Password is correct
        $_SESSION['email'] = $row['email'];

echo "successful";
        
        exit();
    } else {
        // Incorrect password
        header("Location: ../../auth/index.php?error=Incorrect username or password");
        exit();
    }
} else {
    // User not found
    header("Location: ../../auth/index.php?error=Incorrect username or password");
    exit();
}

