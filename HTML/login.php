<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharaoh's Gate - Register/Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/styel.css">

</head>

<body>

    <!-- Start Login && Register -->
    <div class="Login-full-background"></div>
    <div class="Login-container1" id="Login-login-box">
        <h2 class="Login-text-sin">Explore the wonders of<br>ancient Egypt.<br>Book your tickets now</h2>

        <form action="../PHP/login_register.php" method="POST">
            <input type="email" name="email" class="Login-input-box" placeholder="Email" required>
            <input type="password" name="password" class="Login-input-box" placeholder="Password" required>
            <p class="Login-forgot-password">Forgot Password?</p>
            <div class="Login-btn-container">
                <button type="submit" class="Login-btn" name="login">Login</button>
                <button type="button" class="Login-btn" onclick="Login_showForm('Login-signup-box')">Register</button>
            </div>
        </form>

        <div class="Login-social-login">
            <button onclick="Login_socialLogin('github')"><i class="fab fa-github"></i></button>
            <button onclick="Login_socialLogin('google')"><i class="fab fa-google"></i></button>
            <button onclick="Login_socialLogin('microsoft')"><i class="fab fa-microsoft"></i></button>
        </div>
    </div>

    <div class="Login-container1" id="Login-signup-box" style="display: none;">
        <h2 class="Login-text-sin">Create Pharaoh Account</h2>
        <form action="../PHP/login_register.php" method="POST">
            <input type="text" name="name" class="Login-input-box" placeholder="User Name" required>
            <input type="email" name="email" class="Login-input-box" placeholder="Email" required>
            <input type="password" name="password" class="Login-input-box" placeholder="Password" required>
            <div class="Login-btn-container">
                <button type="submit" class="Login-btn" name="register">Sign Up</button>
            </div>
        </form>
        <p class="Login-toggle" onclick="Login_toggleForm()">Already have an account? Login</p>
    </div>

    <a href="../HTML/home.html" class="Login-exit-link">
        <i class="fas fa-arrow-left"></i>
    </a>

    <!-- End Login && Register -->

    <script src="../JS/main.js"></script>

</body>

</html>