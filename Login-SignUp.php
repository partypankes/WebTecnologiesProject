
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/global.css">
        <link rel="stylesheet" href="assets/css/login_page.css">
        <link rel="stylesheet" href="assets/css/signup_page.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <title>Login Page</title>
    </head>

    <body>
        <div id="scroll-container">
            <div id="Login-section" class="login-section">
                <?php include('login_page.php');?>
            </div>

            <div id="SignUp-section" class="signup-section" style="display: none">
                <?php include('signup_definitivo.php');?>
            </div>
        </div>

    <script src="assets/js/signup_page_validation.js"></script>
    <script src="assets/js/login_page_validation.js"></script>
    <script src="assets/js/Login-SignUp_validation.js"></script>

    </body>
</html>