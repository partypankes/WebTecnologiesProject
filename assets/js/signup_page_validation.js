
/*CONTROLLO DATI SIGNUP SECTION1*/
document.getElementById('next-button').addEventListener('click', function(event) {
    event.preventDefault();

    var name = document.getElementById('name').value;
    var surname = document.getElementById('surname').value;
    var birthdate = document.getElementById('birthdate').value;
    var genderRadios = document.getElementsByName('sesso');

    var selected = false; // Flag per indicare se è stato selezionato un genere

    var isValid= true;

    /*controllo genere*/
    for(let i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
            selected = true;
            break;
        }
    }

    if (!selected) {
        document.getElementById('errorMessage_signup').textContent = "Selezionare genere";
        isValid = false;
    }

    /*inserimento data di nascita*/
    if (!birthdate.trim()) {
        document.getElementById('errorMessage_signup').textContent = "Inserire data di nascita";
        isValid = false;
    }

    /*controllo limiti date*/
    var dataInserita = new Date(birthdate)
    var dataMassima = new Date('2014-12-31');
    var dataMinima = new Date('1900-01-01');

    if (dataInserita < dataMinima || dataInserita > dataMassima) {
        document.getElementById('errorMessage_signup').textContent = "Inserire una data valida";
        isValid = false;
    }

    /*inserimento cognome, controllo lunghezza minima e presenza numeri o caratteri speciali*/
    if (!surname.trim()) {
        document.getElementById('errorMessage_signup').textContent = "Inserire il cognome";
        isValid = false;
    }

    if(surname.length<2) {
        document.getElementById('errorMessage_signup').textContent = "Inserisci un cognome valido";
        isValid = false;
    }

    if(surname.match(/[0-9]/) || surname.match(/[^a-zA-Z0-9 ]/)) {
        document.getElementById('errorMessage_signup').textContent = "Caratteri non autorizzati nel cognome";
        isValid = false;
    }

    /*inserimento nome, controllo lunghezza minima e presenza numeri o caratteri speciali*/
    if (!name.trim()) {
        document.getElementById('errorMessage_signup').textContent = "Inserire il nome";
        isValid = false;
    }

    if(name.length<2) {
        document.getElementById('errorMessage_signup').textContent = "Inserisci un nome valido";
        isValid = false;
    }

    if(name.match(/[0-9]/) || name.match(/[^a-zA-Z0-9 ]/)) {
        document.getElementById('errorMessage_signup').textContent = "Caratteri non autorizzati nel nome";
        isValid = false;
    }


    /*scroll se dati sono validi*/
    if(isValid){
        changesection();
        document.getElementById('errorMessage_signup').textContent = "";
    }
});


/*CONTROLLO DATI SIGNUP SECTION2*/
document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();


    var username = document.getElementById('username_signup').value;
    var email = document.getElementById('email').value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var password = document.getElementById('password_signup').value;
    var confirmpassword = document.getElementById('confirmpassword').value;

    /*lunghezza username*/
    if (username.length < 6 || username.length > 16) {
        document.getElementById('errorMessage_signup').textContent = "Lo username deve essere compreso tra i 6 e 16 caratteri";
        return;
    }

    /*controllo username giá in uso*/

    /*controllo validita email*/
    if (!validaEmail(email)) {
        document.getElementById('errorMessage_signup').textContent = "L'E-mail inserita non e' valida"
        return;
    }

    /*controllo mail giá in uso*/

    /********************************************** INIZIO CONTROLLO PASSWORD **********************************************/

    /*Controllo lunghezza password*/
    if (!(password.length >= 8 && password.length <= 20)) {
        document.getElementById('errorMessage_signup').textContent = "La password deve essere compresa tra gli 8 e 20 caratteri";
        return;
    }
    /*controllo presenza lettere maiuscole*/
    if (!(password.match(/[A-Z]/))) {
        document.getElementById('errorMessage_signup').textContent = "La password deve contenere almeno un carattere maiuscolo ";
        return;
    }
    /*controllo presenza lettere minuscole*/
    if (!(password.match(/[a-z]/))) {
        document.getElementById('errorMessage_signup').textContent = "La password deve contenere almeno un carattere maiuscolo";
        return;
    }

    /*controllo presenza numeri*/
    if (!(password.match(/[0-9]/))) {
        document.getElementById('errorMessage_signup').textContent = "La password deve contenere almeno un numero";
        return;
    }

    /*controllo presenza carattere speciale*/
    if(!(password.match(/[^a-zA-Z0-9]/))){
        document.getElementById('errorMessage_signup').textContent = "La password deve contenere almeno un carattere speciale";
        return;
    }

    /*CONTROLLO SE LE DUE PASSWORD SONO UGUALI*/
    if(!(confirmpassword.match(password))){
        document.getElementById('errorMessage_signup').textContent = "Le password non coincidono";
        return;
    }


    /********************************************** FINE CONTROLLO PASSWORD **********************************************/

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'core/signup.php', true);

    xhr.onload = function() {
        if (this.status >= 200 && this.status < 300) {
            // Richiesta completata con successo
            var data = this.responseText;
            if (data) {
                document.getElementById('errorMessage_signup').textContent = data;
            } else {
                window.location.href = 'homepage.php';
            }
        }
    };



    xhr.send(formData);
});

/*le due funzioni successive si possono unire in un unica funzione passando a changesection le sezioni come parametri e cancellando il textContent dell'errorMessage*/
function changesection(){

    document.getElementById('section1').style.display="none";
    document.getElementById('section2').style.display="block";

}

function backbutton() {

    document.getElementById('section2').style.display="none";
    document.getElementById('section1').style.display="block";
    document.getElementById('errorMessage_signup').textContent = ""; //cancella errore nell'errorMessage quando si va nella prima section

}


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


document.getElementById('togglePassword_signup').addEventListener('click', function () {
    const password = document.getElementById('password_signup');
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
    document.getElementById(divID).style.display='block';
}



document.getElementById('password_signup').addEventListener('input', function () {
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