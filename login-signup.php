<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accedi - SapurEat</title>
        <link rel="icon" type="image/x-icon" href="resources/favicon.ico">
        <link rel="stylesheet" href="assets/global.css">
        <link rel="stylesheet" href="assets/css/login-signup/login_page.css">
        <link rel="stylesheet" href="assets/css/login-signup/signup_page.css">
        <link rel="stylesheet" href="assets/css/login-signup/login-signup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    </head>

    <body>
    <div class="backdrop"></div>
        <div>
            <div class="container">

                <section id="login-section" class="login-section">
                    <?php
                    include('structure/login_page.php');
                    ?>
                </section>

                <section id="signup-section" class="signup-section">
                    <?php
                    include('structure/signup_definitivo.php');
                    ?>
                </section>

            </div>
        </div>


    <script src="assets/js/signup_page_validation.js"></script>
    <script src="assets/js/login_page_validation.js"></script>
    <script src="assets/js/Login-SignUp_validation.js"></script>

    </body>
</html>