
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_page.css">
    <title>Login Page</title>
</head>
<body>

<div class="login-container">

        <label>Log in</label> <br>
        <label> Enter your details to continue </label>
        <br>


    <div class="login-data">
    <form action="login.php" method="post">
        <label for="username">Enter your email:</label>
        <input type="text" id="username" name="username" placeholder="Your Username" required>
        <br>
        <label for="password">Enter your Password:</label>
        <input type="password" id="password" name="password" placeholder="Your Password" required>

         <button type="submit">Login</button>
    </form>
    </div>
</div>

</body>
</html>