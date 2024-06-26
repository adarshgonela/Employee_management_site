<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../assets/signup.css">
</head>
<body>
    <div class="container">
        <form class="signup-form" action="auth/signupSql.php" method="post">
            <h2>Sign Up</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text"  name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="cpassword" required>
                <input type="hidden" name="signup"> 
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <br><br>
        <span class="ml-2" id="h1"
            >You have an account?
            <a
              href="login.php" id="h2"
              class="text-xs ml-2 font-semibold"
              >Login here</a
            ></span
          >
    </div>
</body>
</html>
