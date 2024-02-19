<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page - SapurEat</title>

        <link rel="stylesheet" href="assets/global.css">
        <link rel="stylesheet" href="assets/css/login_page.css">
       <link rel="stylesheet" href="assets/css/signup_page.css">
        <link rel="stylesheet" href="assets/css/Login-SignUp.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <script>

            function changesection(){

                document.getElementById('section1').style.display="none";
                document.getElementById('section2').style.display="block";

            }

            function backbutton() {

                let info = document.getElementById('info_password').style.display;

                if( info === "block"){
                    info ="none";
                }
                document.getElementById('section2').style.display="none";
                document.getElementById('section1').style.display="block";
            }

            function hideText(divID){
                document.getElementById(divID).style.display='none';
            }

            function showText(divID){
                document.getElementById(divID).style.display='block';
            }

        </script>
    </head>

    <body>
    <div class="backdrop"></div>

    <div class="container">

        <section id="login-section" class="login-section">
            <?php
                include('login_page.php');
            ?>
        </section>

        <section id="signup-section" class="signup-section" style="display: none">
            <?php
                include('signup_definitivo.php');
            ?>
        </section>

    </div>

    <script src="assets/js/signup_page_validation.js"></script>
    <script src="assets/js/login_page_validation.js"></script>
    <script src="assets/js/Login-SignUp_validation.js"></script>

    </body>
</html>