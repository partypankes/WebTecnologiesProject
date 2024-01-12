<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Page 2</title>
    <!-- Link to your existing style.css -->
    <link rel="stylesheet" href="style.css">
    <!-- You may also include other head elements from your original signup_page.php -->
</head>
<body>

<div class="login-container">
    <div class="title">
        <h1>SIGN UP - Page 2</h1>
        <p>Join our community and start sharing!</p>
    </div>
    <div class="login-data">
        <form id="signupFormPage1" action="signup_page_2.php" method="POST">

            <p id="errorMessage" style="color:red;"></p>
            <div class="username-container">
                <label for="username">Enter your Username:</label>
                <input type="text" id="username" name="username" placeholder="Your Username" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')" required>
                <i id="usernameIcon" class="fas fa-user"></i>
            </div>
            <br>
            <div class="username-container">
                <label for="email">Enter your Email:</label>
                <input type="text" id="email" name="email" placeholder="Your Email" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')" required>
            </div>
            <br>
            <div class="password-container">
                <label for="password">Enter your Password:</label>
                <input type="password" id="password" name="password" placeholder="Your Password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')" required>
                <i id="togglePassword" class="fas fa-eye-slash" style="cursor: pointer;"></i>
            <br>
                <div class="password-container">
                    <label for="confirmpassword">Confirm your Password:</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')" required>
                    <i id="togglePassword" class="fas fa-eye-slash" style="cursor: pointer;"></i>
                </div>
            <br>

            <br>
            <div class="login">
                <button id="submitButton" type="submit"><div style="font-family:'MontSerrat T',serif" >Sign In</div> </button>
            </div>
            <br>
        </form>
        <div id="errorMessage"></div>
        <script src="signup_validation_page_2.js"></script>
        </form>
    </div>
</div>

</body>
</html>
