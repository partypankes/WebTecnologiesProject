document.addEventListener('DOMContentLoaded', function() {
    let validate = 0;
    const form = document.getElementById('ricetta-form');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Impedisce l'invio del form
        let isFormValid = false;

        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {

            validateField(input); // Valida il campo al momento del submit
        });

        //console.log("Input: " + inputs.length);

        console.log("validate: " + validate);
        if(validate === inputs.length - 1){
            isFormValid = true;
        }

        /*Controllo sulle immagini*/
        const imageInput = document.getElementById('input-banner');
        const imageContainer = document.getElementById('immagine_banner');
        if (!imageInput.files.length) {
            imageContainer.classList.add('error');
            console.log("Formvalid: " + isFormValid);
            isFormValid = false;
        } else {
            imageContainer.classList.remove('error');
        }

        console.log("Formvalid2: " + isFormValid);
        if (isFormValid) {
            ajax_inserimento(); // Invia il form se tutti i campi sono stati compilati
        }
        validate = 0;
    });

    document.querySelectorAll('input, textarea, select').forEach(input => {
        input.addEventListener('focus', function() {
            this.classList.remove('error');
            this.placeholder = '';
        });

        input.addEventListener('blur', function() {
            validateField(this);
        });

        input.addEventListener('input', function() {
            // Rimuove lo stato di errore durante la digitazione
            if (this.classList.contains('error')) {
                this.classList.remove('error');
                this.placeholder = '';
            }
        });
    });

    function validateField(field) {
        if (!field.value.trim()) {
            field.classList.add('error');
            field.placeholder = '*Campo obbligatorio';

        } else {
            field.classList.remove('error');
            validate += 1;
            console.log(field.id);
        }
    }
});
