document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('signupFormPage1');
    form.onsubmit = function(event) {
        event.preventDefault();

        // Get the values from the form
        var username = document.getElementById('username').value;
        var name = document.getElementById('name').value;
        var surname = document.getElementById('surname').value;

        // Perform your validation here...
        var isValid = true; // Change this based on validation

        if (isValid) {
            // Store in sessionStorage
            sessionStorage.setItem('username', username);
            sessionStorage.setItem('name', name);
            sessionStorage.setItem('surname', surname);

            // Redirect to the second page
            window.location.href = form.action;
        } else {
            // Show error message
            document.getElementById('errorMessage').textContent = "Please fill out all fields correctly.";
        }
    };
});