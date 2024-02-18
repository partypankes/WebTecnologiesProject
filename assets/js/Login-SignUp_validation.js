document.addEventListener('DOMContentLoaded', function() {
    var signUpButton = document.getElementById('toSignUp-button');
    var loginSection = document.getElementById('Login-section');
    var signUpSection = document.getElementById('SignUp-section');

    if (signUpButton) {
        signUpButton.addEventListener('click', function() {
        loginSection.style.display = 'none';
        signUpSection.style.display = 'flex';
        });
    }
});


