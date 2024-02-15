<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="/login/login_page.css">
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
            <div class="input-container">
                <label for="username">Enter your username:</label>
                <input type="text" id="username" class="input-field" name="username" placeholder="Your Username" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')">
                <i class="input-icon fas fa-user" style="font-weight: normal;"></i>
            </div>

            <br>

            <div class="input-container">
                <label for="password">Enter your Password:</label>
                <input type="password" id="password" class="input-field" name="password" placeholder="Your Password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')">
                <i id="togglePassword" class="input-icon fas fa-eye-slash" style="cursor: pointer; font-weight: normal;"></i>
            </div>

            <div class="remember-me-container">
                <input type="checkbox" id="rememberMe" name="rememberMe" value="true">
                <label for="rememberMe">Remember Me</label>
            </div>

            <div class="login">
                <button class="submit-button" type="submit">Login</button>
            </div>

        </form>
    </div>

    <hr class="divider" />

    <div class="no-account">
        <p> I don't have an account. Sign up</p>
    </div>

</div>
<script src="/login/login_validation.js"></script>
</body>
</html>
