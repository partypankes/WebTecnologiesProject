document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ricetta-form');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        let isFormValid = true;
        const inputs = form.querySelectorAll('input, textarea, select');
        let validInputs = 0;

        inputs.forEach(input => {
            if (validateField(input)) {
                validInputs += 1;
            }
        });

        console.log("Valid inputs: " + validInputs);


        const imageInput = document.getElementById('input-banner');
        const imageContainer = document.getElementById('immagine_banner');
        if (!imageInput.files.length) {
            imageContainer.classList.add('error');
            isFormValid = false;
        } else {
            imageContainer.classList.remove('error');
        }

        console.log("Form valid before image check: " + isFormValid);


        isFormValid = isFormValid && (validInputs === inputs.length);

        console.log("Form valid after image check: " + isFormValid);

        if (isFormValid) {
            ajax_inserimento();
        }
    });

    form.querySelectorAll('input, textarea, select').forEach(input => {
        input.addEventListener('focus', function() {
            this.classList.remove('error');
            this.placeholder = '';
        });

        input.addEventListener('blur', function() {
            validateField(this);
        });

        input.addEventListener('input', function() {

            if (this.classList.contains('error')) {
                this.classList.remove('error');
                this.placeholder = '';
            }
        });
    });

    function validateField(field) {
        if (!field.value.trim()) {
            field.classList.add('error');
            if(!(field.id === 'tempo_preparazione'))
            {
                field.placeholder = '*Campo obbligatorio';
            }

            return false;
        } else {
            field.classList.remove('error');
            return true;
        }
    }
});
