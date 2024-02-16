document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('ricetta-form');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevents form submission
        let isFormValid = true;
        const inputs = form.querySelectorAll('input, textarea, select');
        let validInputs = 0;

        inputs.forEach(input => {
            if (validateField(input)) { // Validates the field at the time of submit
                validInputs += 1;
            }
        });

        console.log("Valid inputs: " + validInputs);

        // Check on images
        const imageInput = document.getElementById('input-banner');
        const imageContainer = document.getElementById('immagine_banner');
        if (!imageInput.files.length) {
            imageContainer.classList.add('error');
            isFormValid = false;
        } else {
            imageContainer.classList.remove('error');
        }

        console.log("Form valid before image check: " + isFormValid);

        // Final form validity check
        isFormValid = isFormValid && (validInputs === inputs.length);

        console.log("Form valid after image check: " + isFormValid);

        if (isFormValid) {
            ajax_inserimento(); // Submits the form if all fields are filled
        }
    });

    document.querySelectorAll('input, textarea, select').forEach(input => {
        input.addEventListener('focus', function() {
            this.classList.remove('error');
            this.placeholder = '';
        });

        input.addEventListener('blur', function() {
            validateField(this); // Validates the field when it loses focus
        });

        input.addEventListener('input', function() {
            // Removes the error state during typing
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
            return false;
        } else {
            field.classList.remove('error');
            return true;
        }
    }
});
