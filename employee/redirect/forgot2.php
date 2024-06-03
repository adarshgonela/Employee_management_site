<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../assets/forgot2.css">
</head>
<?php 
$email1=$_GET["email"];
// echo $email1;

?>
<body>
    <div class="container">
        <form class="forgot-password-form" action="../redirect/auth/forgot2Sql.php?email=<?php echo htmlspecialchars($email1); ?>" method="post">
            <h2>Reset Password</h2>
            <p>Create your new password.</p>
            <div class="form-group">
                <label for="new password">New Password:</label>
                <input type="password" id="password" name="password" placeholder="enter New Password" required><br><br>
                <label for="new password">Confirm Password:</label>
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" required><br>
            </div>
            <button type="submit">Reset Password</button>
        </form>
    </div>
</body>

</html>