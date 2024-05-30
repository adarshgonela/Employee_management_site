<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../assets/forgot.css">
</head>
<body>
    <div class="container">
        <form class="forgot-password-form" action="../redirect/auth/forgotSql.php" method="post">
            <h2>Forgot Password</h2>
            <p>Please enter your email address. We will send you a link to reset your password.</p>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required >
            </div>
            <button type="submit">Verify Email</button>
        </form>
    </div>
</body>
</html>
