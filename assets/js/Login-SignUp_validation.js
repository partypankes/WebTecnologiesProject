document.getElementById('toSignUp-button').addEventListener('click', function () {
    document.getElementById('login-section').style.display= "none";
    document.getElementById('signup-section').style.display = "block";
});

document.getElementById('toLogin-button').addEventListener('click', function () {
    document.getElementById('signup-section').style.display= "none";
    document.getElementById('login-section').style.display = "block";
});