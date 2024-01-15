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

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'signup.php', true);

    xhr.onload = function() {
        if (this.status >= 200 && this.status < 300) {
            // Richiesta completata con successo
            var data = this.responseText;
            if (data) {
                document.getElementById('errorMessage').textContent = data;
            } else {
                window.location.href = '../hompage/hompageNR.php';
            }
        } else {
            // Gestisci errori di rete o errori HTTP qui
            console.error('Errore nella richiesta:', this.statusText);
        }
    };

    xhr.onerror = function() {
        // Gestisci errori di rete qui
        console.error('Errore nella richiesta di rete');
    };

    xhr.send(formData);
});

function clearPlaceholder(element) {
    element.placeholder = '';
}

function restorePlaceholder(element, defaultPlaceholder) {
    element.placeholder = element.getAttribute('data-placeholder') || defaultPlaceholder;
}
