
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_page.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>

<div class="login-container">
        <div class="title">
        <h1>Log in</h1>
        <p> Enter your details to continue </p>
        </div>
        


    <div class="login-data">
    <form id="loginForm" action="login.php" method="post">
        <p id="errorMessage" style="color:red;"></p>
        <div class="username-container">
            <label for="username">Enter your username:</label>
            <input type="text" id="username" name="username" placeholder="Your Username" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')" required>
            <i id="usernameIcon" class="fas fa-user"></i> 
        </div>

        <br>

        <div class="password-container">
        <label for="password">Enter your Password:</label>
        <input type="password" id="password" name="password" placeholder="Your Password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')" required>
        <i id="togglePassword" class="fas fa-eye-slash" style="cursor: pointer;"></i>
        </div>

        <div class="remember-me-container">
            <input type="checkbox" id="rememberMe" name="remember_me">
            <label for="rememberMe">Remember Me</label>
        </div>

        <div class="login">
            <button id="submitButton" type="submit"><div style="font-family:'MontSerrat T',serif">Login</div></button>
        </div>

    </form>
    </div>

    <hr class="divider" />

    <div class="no-account">
        <p> I don't have an account. Sign up</p>

    </div>

</div>
<script src="login_validation.js"></script>
</body>
</html>