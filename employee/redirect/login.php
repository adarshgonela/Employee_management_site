<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/login.css">
</head>
<body>
    <div class="container">
        <form class="login-form" action="../redirect/auth/loginSql.php" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <a href="#" class="forgot-password">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
