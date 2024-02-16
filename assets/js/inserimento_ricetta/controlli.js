document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ricetta-form');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Impedisce l'invio del form
        let isFormValid = true;

        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            validateField(input); // Valida il campo al momento del submit
        });

        const imageInput = document.getElementById('input-banner');
        const imageContainer = document.getElementById('immagine_banner');
        if (!imageInput.files.length) {
            imageContainer.classList.add('error');
            isFormValid = false;
        } else {
            imageContainer.classList.remove('error');
        }

        if (isFormValid) {
            ajax_inserimento(); // Invia il form se tutti i campi sono stati compilati
        }
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
        }
    }
});
