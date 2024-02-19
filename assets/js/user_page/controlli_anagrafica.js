document.getElementById('anagrafica').addEventListener('submit', function(event) {
    event.preventDefault();
    var name = document.getElementById('name').value;
    var surname = document.getElementById('surname').value;
    var birthdate = document.getElementById('birthdate').value;
    var isValid= true;


    var dataInserita = new Date(birthdate)
    var dataMassima = new Date('2014-12-31');
    var dataMinima = new Date('1900-01-01');

    if (dataInserita < dataMinima || dataInserita > dataMassima) {
        document.getElementById('errorMessage_signup').textContent = "Inserire una data valida";
        isValid = false;
    }

    if(surname.trim() && surname.length<2) {
        document.getElementById('errorMessage_signup').textContent = "Inserisci un cognome valido";
        isValid = false;
    }

    if(surname.match(/[0-9]/) || surname.match(/[^a-zA-Z0-9 ]/)) {
        document.getElementById('errorMessage_signup').textContent = "Caratteri non autorizzati nel cognome";
        isValid = false;
    }

    if(name.trim() && name.length<2) {
        document.getElementById('errorMessage_signup').textContent = "Inserisci un nome valido";
        isValid = false;
    }

    if(name.match(/[0-9]/) || name.match(/[^a-zA-Z0-9 ]/)) {
        document.getElementById('errorMessage_signup').textContent = "Caratteri non autorizzati nel nome";
        isValid = false;
    }

    var email = document.getElementById('email').value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var password = document.getElementById('password').value;
    var confirmpassword = document.getElementById('new-password').value;


    /*controllo validita email*/
    if (email.trim() && !validaEmail(email) ) {
        document.getElementById('errorMessage_signup').textContent = "L'E-mail inserita non e' valida"
        return;
    }

    /*controllo mail giá in uso*/

    /********************************************** INIZIO CONTROLLO PASSWORD **********************************************/

    /*Controllo lunghezza password*/
    if (password.trim() && !(password.length >= 8 && password.length <= 20)) {
        document.getElementById('errorMessage_signup').textContent = "La password deve essere compresa tra gli 8 e 20 caratteri";
        return;
    }
    /*controllo presenza lettere maiuscole*/
    if (password.trim() && !(password.match(/[A-Z]/))) {
        document.getElementById('errorMessage_signup').textContent = "La password deve contenere almeno un carattere maiuscolo ";
        return;
    }
    /*controllo presenza lettere minuscole*/
    if (password.trim() && !(password.match(/[a-z]/))) {
        document.getElementById('errorMessage_signup').textContent = "La password deve contenere almeno un carattere maiuscolo";
        return;
    }

    /*controllo presenza numeri*/
    if (password.trim() && !(password.match(/[0-9]/))) {
        document.getElementById('errorMessage_signup').textContent = "La password deve contenere almeno un numero";
        return;
    }

    /*controllo presenza carattere speciale*/
    if (password.trim() && !(password.match(/[^a-zA-Z0-9]/))) {
        document.getElementById('errorMessage_signup').textContent = "La password deve contenere almeno un carattere speciale";
        return;
    }

    /*CONTROLLO SE LE DUE PASSWORD SONO UGUALI*/
    if (password.trim() && !(confirmpassword.match(password))) {
        document.getElementById('errorMessage_signup').textContent = "Le password non coincidono";

    }

if(isValid){
    var form = document.getElementById('anagrafica');

        var formData = new FormData(this);
        let xhr = new XMLHttpRequest();

        xhr.open('POST', 'core/user_page/update_dati_utente.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Passa showFormAnagrafica come callback a fetch_dati
                document.getElementById("content-anagrafica").innerHTML = xhr.responseText;
                showFormAnagrafica();
            }
        };
        xhr.send(formData);


}



});
function validaEmail(email) {
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return regex.test(email);
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
let bool = true;
function showFormAnagrafica() {
    bool = !bool;

    let form_anagrafica = document.getElementById('anagrafica');
    let anagrafica = document.querySelector('.anagrafica');
    if (bool) {
        form_anagrafica.style.display = "none";
        anagrafica.style.display = "block";
    } else {
        form_anagrafica.style.display = "block";
        anagrafica.style.display = "none";
    }

}
