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
        <h1>Sign Up</h1>
        <p>Join our community and start sharing!</p>
        <p id="errorMessage" style="color:red;"></p>
    </div>
    <div class="login-data">
        <form id="signupForm" method="post">
            <div class="scroll-container">
                <div id="section1" class="scroll-section">

                    <!-- Section 1: Personal Information -->
                    <div class="input-container">
                        <label for="name">Name:</label>
                        <input type="text" name="nome" id="name" class="input-field" placeholder="Name">
                    </div>
                    <div class="input-container">
                        <label for="surname">Surname:</label>
                        <input type="text" name="cognome" id="surname" class="input-field" placeholder="Surname">
                    </div>
                    <div class="input-container">
                        <label for="birthdate">Date of Birth:</label>
                        <input type="date" name="data_di_nascita" id="birthdate" class="input-field" placeholder="Date of Birth">
                    </div>
                    <div class="input-container">
                        <label for="Gender">Gender: </label>
                        <label for="Gender" > &emsp;Uomo</label>
                        <input type="radio" id="Gender" name="sesso" value="M">
                        <label for="Gender"> &emsp;Donna</label>
                        <input type="radio" id="Gender" name="sesso" value="F">
                        <label for="Gender"> &emsp;Altro</label>
                        <input type="radio" id="Gender" name="sesso" value="O">
                    </div>

                    <div class="login">
                        <button type="button" id="next-button" class="submit-button" form="signupForm1" ><div style="font-family:'MontSerrat T',serif" >Next</div> </button>
                    </div>


                </div>
                <div id="section2" class="scroll-section">
                    <!--<p id="errorMessage" style="color:red;"></p> -->
                    <!-- Section 2: Account Information -->
                    <div class="input-container">
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username" class="input-field" placeholder="Username" maxlength="16">
                    </div>
                    <div class="input-container">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="input-field" placeholder="Email">
                    </div>
                    <div class="input-container" id="password-div">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="input-field" placeholder="Password" onfocus="showText('info-password')" onblur="hideText('info-password')" maxlength="20">
                        <div class="info-password" id="info-password">
                            <label for="password" id="intro_requisiti">La password deve avere:</label>
                            <ul>
                                <li id="lunghezza">Una lunghezza compresa tra 8 e 20 caratteri</li>
                                <li id="maiuscola">Almeno una lettera maiuscola</li>
                                <li id="minuscola">Almeno una lettera minuscola</li>
                                <li id="numero">Almeno un numero</li>
                                <li id="carspeciale">Almeno un carattere speciale</li>
                            </ul>
                        </div>
                    </div>

                    <div class="input-container">
                        <label for="confirmpassword">Confirm Password:</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="input-field" placeholder="Confirm Password">
                    </div>

                    <div class = "login">
                        <input type="submit" class="submit-button" form="signupForm" value="Register">
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
<script>
    function hideText(divID){
        document.getElementById(divID).style.display='none';
    }

    function showText(divID){
        document.getElementById(divID).style.display='inline';
    }



    function scrollToSection(sectionId, sectionId1) {
        document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        var a = document.getElementById(sectionId1);
        setTimeout(function(){a.hidden = true}, 485);
    }


    document.getElementById('password').addEventListener('input', function () {
        const password = this.value;

        if (password.length>=8 && password.length<=20)
            document.getElementById('lunghezza').style.color = 'limegreen';
        else
            document.getElementById('lunghezza').style.color = 'grey';

        /**/
        if (password.match(/[a-z]/))
            document.getElementById('minuscola').style.color ='limegreen';
        else
            document.getElementById('minuscola').style.color='grey';

        /**/
        if (password.match(/[A-Z]/))
            document.getElementById('maiuscola').style.color='limegreen';
         else
            document.getElementById('maiuscola').style.color='grey';

        /**/
        if (password.match(/[0-9]/))
            document.getElementById('numero').style.color='limegreen';
         else
            document.getElementById('numero').style.color='grey';

        /**/
        if (password.match(/[^a-zA-Z0-9]/))
            document.getElementById('carspeciale').style.color='limegreen';
        else
            document.getElementById('carspeciale').style.color='grey';

        /**/
        if( password.length>=8 && password.length<=20 && password.match(/[a-z]/) && password.match(/[A-Z]/) && password.match(/[0-9]/) && password.match(/[^a-zA-Z0-9]/))
            document.getElementById('intro_requisiti').style.color='limegreen';
        else
            document.getElementById('intro_requisiti').style.color='grey';
    });

</script>
<script src="signup_validation.js"></script>
</body>
</html>
