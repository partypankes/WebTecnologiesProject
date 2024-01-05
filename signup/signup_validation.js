document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (username.length < 6 || username.length > 16) {
        alert('Lo username deve essere lungo tra 6 e 16 caratteri.');
        return;
    }

    if (!emailPattern.test(email)) {
        alert('Per favore inserisci un indirizzo email valido.');
        return;
    }

    var formData = new FormData(this);

    fetch('signup.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            if (data) {
                document.getElementById('errorMessage').textContent = data;
            } else {
                window.location.href = '../hompage/hompageNR.php';
            }
        });
});