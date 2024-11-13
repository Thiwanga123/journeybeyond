<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/UserSignUp.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="container" id="container">
        <div class="left">
            <div class="top">
                <div class="logo">
                    <a href="/Landing Page/Home.html" class = "logo">
                    <img src="../Images/Logo1.png">
                    <p>JOURNEY <br><span>BEYOND</span></p>
                </div>
                </a>
                   <p class="login-account-link"> Already have an account? <a href="../Sign In/User.php">Login</a></p>   
            </div>

            <div class="bottom">

            <div class="login-box">
                <h1>Create Your Account</h1>
                <form action="signup_process.php" method="post">
                    <div class="inputs">
                        <div class="column">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                
                            <label for="username">User Name</label>
                            <input type="text" id="username" name="username" required>
                
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="column">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" id="confirm-password" name="confirmpassword" required>
                        </div>
                    </div>   
                    <button type="submit" class="signup-btn" name="Submit">Create Account</button>
                </form>
            </div>
        </div>
    </div>

        <div class="right">
            <p>Want to provide service via us?</p>
            <button type="submit" class="service-btn">Join With Us</button>
        </div>

        <script src="../JS Scripts/signIn.js" defer></script>
    
</body>
</html>