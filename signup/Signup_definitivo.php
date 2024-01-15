<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login-container">
    <div class="title">
        <h1>SIGN UP</h1>
        <p>Join our community and start sharing!</p>
    </div>
    <div class="login-data">
        <form id="signupForm" method="post">
            <div class="scroll-container">
                <div id="section1" class="scroll-section">
                    <!-- Section 1: Personal Information -->
                    <div class="input-container">
                        <label for="name">Enter your Name:</label>
                        <input type="text" name="firstname" id="name" class="input-field" placeholder="Name">
                    </div>
                    <div class="input-container">
                        <label for="surname">Enter your Surname:</label>
                        <input type="text" name="lastname" id="surname" class="input-field" placeholder="Surname">
                    </div>
                    <div class="input-container">
                        <label for="birthdate">Enter your Date of Birth:</label>
                        <input type="date" name="birthdate" id="birthdate" class="input-field" placeholder="Date of Birth">
                    </div>
                    <div class="input-container">
                        <label for="Gender">Enter your Gender:</label>
                        <select  name="Gender" id="Gender" class="input-field">
                            <option value="" disabled selected>Choose your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="login">
                        <button type="button" class="submit-button" onclick="scrollToSection('section2', 'section1')" ><div style="font-family:'MontSerrat T',serif" >Next</div> </button>
                    </div>

                </div>
                <div id="section2" class="scroll-section">
                    <!-- Section 2: Account Information -->
                    <div class="input-container">
                        <label for="username">Enter your Username:</label>
                        <input type="text" name="username" id="username" class="input-field" placeholder="Username">
                    </div>
                    <div class="input-container">
                        <label for="email">Enter your Email:</label>
                        <input type="email" name="email" id="email" class="input-field" placeholder="Email">
                    </div>
                    <div class="input-container">
                        <label for="password">Enter your Password:</label>
                        <input type="password" name="password" id="password" class="input-field" placeholder="Password">
                    </div>

                    <div class="input-container">
                        <label for="confirmpassword">Confirm Password:</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="input-field" placeholder="Confirm Password">
                    </div>
                    <input type="submit" class="submit-button" value="Register">
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function scrollToSection(sectionId, sectionId1) {
        document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        var a = document.getElementById(sectionId1);
        setTimeout(function(){a.hidden = true}, 485);
    }
</script>
</body>
</html>
