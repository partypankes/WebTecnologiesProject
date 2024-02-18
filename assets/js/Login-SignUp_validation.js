document.addEventListener('DOMContentLoaded', function() {
    var signUpButton = document.getElementById('toSignUp-button');
    var loginButton = document.getElementById('toLogin-button');
    var loginSection = document.getElementById('Login-section');
    var signUpSection = document.getElementById('SignUp-section');

    if (signUpButton) {
        signUpButton.addEventListener('click', function () {
            loginSection.style.display = 'none';
            signUpSection.style.display = 'flex';
        });
    }
    if (loginButton) {
        loginButton.addEventListener('click', function() {
            signUpSection.style.display = 'none';
            loginSection.style.display = 'flex';
        });
    }
});


