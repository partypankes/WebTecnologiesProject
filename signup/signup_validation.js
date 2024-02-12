document.getElementById('next-button').addEventListener('click', function(event) {
    event.preventDefault();

    var name = document.getElementById('name').value;
    var surname = document.getElementById('surname').value;
    var birthdate = document.getElementById('birthdate').value;

    var genderRadios = document.getElementsByName('sesso');
    var selected = false; // Flag per indicare se è stato selezionato un genere

    var isValid= true;

    /*controllo genere*/
    for(var i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
            selected = true;
            break;
        }
    }

    if (!selected) {
        document.getElementById('errorMessage').textContent = "Selezionare genere";
        isValid = false;
    }

    /*inserimento data di nascita*/
    if (!birthdate.trim()) {
        document.getElementById('errorMessage').textContent = "Inserire data di nascita";
        isValid = false;
    }

    /*inserimento cognome*/
    if (!surname.trim()) {
        document.getElementById('errorMessage').textContent = "Inserire il cognome";
        isValid = false;
    }

    /*inserimento nome*/
    if (!name.trim()) {
        document.getElementById('errorMessage').textContent = "Inserire il nome";
        isValid = false;
    }




    /*scroll se dati sono validi*/
    if(isValid){
        scrollToSection('section2', 'section1')
        document.getElementById('errorMessage').textContent = "";
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
    if (password.length < 8 || password.length > 20) {
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

document.getElementById('togglePassword').addEventListener('click', function () {
    const password = document.getElementById('password');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // Cambia l'icona
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});


function hideText(divID){
    document.getElementById(divID).style.display='none';
}

function showText(divID){
    document.getElementById(divID).style.display='inline';
}



function scrollToSection(sectionId, sectionId1) {
    document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
    var a = document.getElementById(sectionId1);
    setTimeout(function(){a.hidden = true}, 485);
}


document.getElementById('password').addEventListener('input', function () {
    const password = this.value;

    if (password.length>=8 && password.length<=20)
        document.getElementById('lunghezza').style.color = 'limegreen';
    else
        document.getElementById('lunghezza').style.color = 'grey';


    if (password.match(/[a-z]/))
        document.getElementById('minuscola').style.color ='limegreen';
    else
        document.getElementById('minuscola').style.color='grey';


    if (password.match(/[A-Z]/))
        document.getElementById('maiuscola').style.color='limegreen';
    else
        document.getElementById('maiuscola').style.color='grey';


    if (password.match(/[0-9]/))
        document.getElementById('numero').style.color='limegreen';
    else
        document.getElementById('numero').style.color='grey';


    if (password.match(/[^a-zA-Z0-9]/))
        document.getElementById('carspeciale').style.color='limegreen';
    else
        document.getElementById('carspeciale').style.color='grey';


    if( password.length>=8 && password.length<=20 && password.match(/[a-z]/) && password.match(/[A-Z]/) && password.match(/[0-9]/) && password.match(/[^a-zA-Z0-9]/))
        document.getElementById('intro_requisiti').style.color='limegreen';
    else
        document.getElementById('intro_requisiti').style.color='grey';
});