document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (username.length < 6 || username.length > 16) {
        document.getElementById('errorMessage').textContent = "Lo username deve essere compreso tra i 6 e 16 caratteri";
        return;
    }

    if (!emailPattern.test(email)) {
        document.getElementById('errorMessage').
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

function clearPlaceholder(element) {
    element.placeholder = '';
}

function restorePlaceholder(element, defaultPlaceholder) {
    element.placeholder = element.getAttribute('data-placeholder') || defaultPlaceholder;
}

document.getElementById('nextButton').addEventListener('click', function() {
    document.getElementById('formSection1').style.display = 'none';
    document.getElementById('formSection2').style.display = 'block';
});