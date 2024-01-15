<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Page 1</title>
    <!-- Link to your existing style.css -->
    <link rel="stylesheet" href="style.css">
    <!-- You may also include other head elements from your original signup_page.php -->
</head>
<body>

<div class="login-container">
    <div id="formSection1" class="form-section">
    <div class="title">
        <h1>SIGN UP - Page 1</h1>
        <p>Join our community and start sharing!</p>
    </div>
    <div class="login-data">
        <form id="signupFormPage1" action="Signup_definitivo.php" method="POST">

            <p id="errorMessage" style="color:red;"></p>
            <div class="input-container">
                <label for="nome">Enter your Name:</label>
                <input type="text" id="nome" name="nome" placeholder="Your Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Name')" required>
            </div>

            <div class="input-container">
                <label for="cognome">Enter your Surname:</label>
                <input type="text" id="cognome" name="cognome" placeholder="Your Surname" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Name')" required>
            </div>

            <div class="input-container">
                <label for="sesso">Enter your Sex:</label>
                <select id="sex" name="sex" required>
                <option value="">Select...</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
                <input type="text" id="sesso" name="sesso" placeholder="Your Sex" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Name')" required>
            </div>

            <div class="input-container">
                <label for="data di nascita">Enter your Birth Date:</label>
                <input type="date" id="data di nascita" name="data di nascita" placeholder="Your Birth Date" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Name')" required>
            </div>

            <div class="login">
                <button id="submitButton" type="submit"><div style="font-family:'MontSerrat T',serif" >Next Page</div> </button>
            </div>

        </form>
        <div id="errorMessage"></div>
        <script src="signup_validation_page_1.js"></script>
        </form>
    </div>
    </div>







<div id="formSection2" class="form-section" style="display:none;">
    <div class="title">
        <h1>SIGN UP - Page 2</h1>
        <p>Join our community and start sharing!</p>
    </div>
    <div class="login-data">
        <form id="signupFormPage1" action="Signup_definitivo.php" method="POST">

            <p id="errorMessage" style="color:red;"></p>
            <div class="input-container">
                <label for="username">Enter your Username:</label>
                <input type="text" id="username" name="username" placeholder="Your Username" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')" required>
                <i id="usernameIcon" class="fas fa-user"></i>
            </div>

            <div class="input-container">
                <label for="email">Enter your Email:</label>
                <input type="text" id="email" name="email" placeholder="Your Email" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Username')" required>
            </div>

            <div class="password-container">
                <label for="password">Enter your Password:</label>
                <input type="password" id="password" name="password" placeholder="Your Password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')" required>
                <i id="togglePassword" class="fas fa-eye-slash" style="cursor: pointer;"></i>

                <div class="password-container">
                    <label for="confirmpassword">Confirm your Password:</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Password')" required>
                    <i id="togglePassword" class="fas fa-eye-slash" style="cursor: pointer;"></i>
                </div>



                <div class="login">
                    <button id="submitButton" type="submit"><div style="font-family:'MontSerrat T',serif" >Sign In</div> </button>
                </div>

        </form>
        <div id="errorMessage"></div>
        <script src="signup_validation_page_2.js"></script>
        </form>
    </div>
</div>

</div>
</body>
</html>