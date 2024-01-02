<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="description">
            <h1>SIGN UP</h1>
            <p>Join our community and start sharing!</p>
        </div>
<form action="signup.php" method="post">
        <div class="info">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" placeholder="Your Name" required>
            <br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Enter your email address" required>
            <br>
            <label for="sesso">Sesso:</label>
            <input type="text" id="sesso" name="sesso" placeholder="Enter your sesso required" required>
            <br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Create a username" required>
            <label for="password">Create Password:</label>
        <input type="password" id="password" name="password" placeholder="Your Password" required>
            <br>
            <label for="confirmpassword">Enter your Password:</label>
        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Your Password" required>
        </div>
        <button type="submit">Sign Up</button>
</form>
    </div>
</body>
</html>