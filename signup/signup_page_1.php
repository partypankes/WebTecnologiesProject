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
    <div class="title">
        <h1>SIGN UP - Page 1</h1>
        <p>Join our community and start sharing!</p>
    </div>
    <div class="login-data">
        <form id="signupFormPage1" action="signup_page_2.php" method="POST">

            <p id="errorMessage" style="color:red;"></p>
            <div class="username-container">
                <label for="nome">Enter your Name:</label>
                <input type="text" id="nome" name="nome" placeholder="Your Name" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Name')" required>
            </div>

            <div class="username-container">
                <label for="cognome">Enter your Surname:</label>
                <input type="text" id="cognome" name="cognome" placeholder="Your Surname" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Name')" required>
            </div>

            <div class="username-container">
                <label for="sesso">Enter your Sex:</label>
                <select id="sex" name="sex" required>
                <option value="">Select...</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
                <input type="text" id="sesso" name="sesso" placeholder="Your Sex" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Your Name')" required>
            </div>

            <div class="username-container">
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

</body>
</html>