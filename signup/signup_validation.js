document.getElementById('next-button').addEventListener('click', function(event) {
    event.preventDefault();

    var name = document.getElementById('name').value;
    var surname = document.getElementById('surname').value;
    var birthdate = document.getElementById('birthdate').value;

    var isValid= true;

    /*inserimento nome*/
    if (!name.trim()) {
        document.getElementById('errorMessage').textContent = "Inserire il nome";
        isValid = false;
    }

    /*inserimento cognome*/
    if (!surname.trim()) {
        document.getElementById('errorMessage').textContent = "Inserire il cognome";
        isValid = false;
    }

    /*inserimento data di nascita*/
    if (!birthdate.trim()) {
        document.getElementById('errorMessage').textContent = "Inserire data di nascita";
        isValid = false;
    }

    if(!isValid){
        return false;
    }
});

document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var password = document.getElementById('password').value;

    /*lunghezza username*/
    if (username.length < 6 || username.length > 16) {
        document.getElementById('errorMessage').textContent = "Lo username deve essere compreso tra i 6 e 16 caratteri";
        return;
    }
    /*fine controllo username*/

    /*controllo validita email*/
    if (!validaEmail(email)) {
        document.getElementById('errorMessage').textContent = "La mail inserita non e' valida"
        return;
    }
    /*fine controllo email*/


    /********************************************** INIZIO CONTROLLO PASSWORD **********************************************/

    /*Controllo lunghezza password*/
    if (password.length < 8 || pasword.length > 20) {
        document.getElementById('errorMessage').textContent = "La password deve essere compresa tra gli 8 e 20 caratteri";
        return;
    }

    /*controllo presenza lettere maiuscole*/
    if(!password.includes([A-Z])){
        document.getElementById('errorMessage').textContent = "La password deve contenere almeno un carattere maiuscolo ";
        return;
    }
    /*controllo presenza lettere minuscole*/
    if(!password.includes([a-z])){
        document.getElementById('errorMessage').textContent = "La password deve contenere almeno un carattere maiuscolo";
        return;
    }
    /*controllo presenza carattere speciale*/
    if(!password.includes("")){
        document.getElementById('errorMessage').textContent = "La password deve contenere almeno un carattere speciale";
        return;
    }

    /********************************************** FINE CONTROLLO PASSWORD **********************************************/

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

function validaEmail(email) {
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return regex.test(email);
}
