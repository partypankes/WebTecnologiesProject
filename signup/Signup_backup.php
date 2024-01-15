<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="../signup/style.css">
</head>
<body>
    <div class="login-container">
        <div class="title">
            <h1>SIGN UP</h1>
            <p>Join our community and start sharing!</p>
        </div>
        <div class="login-data">
            <form id="signupForm" method="post">


            <form id="signupForm" method="post">
                <p id="errorMessage" style="color:red;"></p>
                <div class="input-container">
                    <label for="username">Enter your username:</label>
                    <input type="text" id="username" name="username" placeholder="Your Username" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')" required>
                    <i id="usernameIcon" class="fas fa-user"></i>
                </div>

                <br>

                <div class="input-container">
                    <label for="nome">Enter your Name:</label>
                    <input type="text" id="nome" name="nome" placeholder="Your Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Name')" required>
                </div>
                    <br>
                <div class="input-container">
                    <label for="cognome">Enter your Surname:</label>
                    <input type="text" id="cognome" name="cognome" placeholder="Your Surname" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Surname')" required>
                </div>
                    <br>
                <div class="input-container">
                    <label for="email">Enter your Email:</label>
                    <input type="text" id="email" name="email" placeholder="Your Email" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Email')" required>
                </div>

                <br>

                <div class="input-container">
                    <label for="sesso">Enter your Sex:</label>
                    <input type="text" id="sesso" name="sesso" placeholder="Your Sex" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Sex')" required>
                </div>

                <br>
                <div class="password-container">
                    <label for="password">Enter your Password:</label>
                    <input type="password" id="password" name="password" placeholder="Your Password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')" required>
                    <i id="togglePassword" class="fas fa-eye-slash" style="cursor: pointer;"></i>
                </div>
                <br>
                <div class="password-container">
                    <label for="confirmpassword">Confirm your Password:</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Confirm Your Password')" required>
                    <i id="togglePassword" class="fas fa-eye-slash" style="cursor: pointer;"></i>
                </div>



                <div class="login">
                    <button id="submitButton" type="submit"><div style="font-family:'MontSerrat T',serif" >Sign Up</div> </button>
                </div>

        </form>
        </div>
    </div>
<script src="signup_validation.js"></script>
</body>
</html>