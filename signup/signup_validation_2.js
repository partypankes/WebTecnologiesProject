document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('signupFormPage2');
    form.onsubmit = function(event) {
        event.preventDefault();

        // Get the values from the form
        var email = document.getElementById('email').value;
        var sex = document.getElementById('sex').value;
        var password = document.getElementById('password').value;
        var confirm_password = document.getElementById('confirm_password').value;

        // Perform your validation here...
        var isValid = true; // Change this based on validation

        if (isValid) {
            // Create a FormData object to send the data
            var formData = new FormData(form);

            // Append data from Page 1 (stored in sessionStorage)
            formData.append('username', sessionStorage.getItem('username'));
            formData.append('name', sessionStorage.getItem('name'));
            formData.append('surname', sessionStorage.getItem('surname'));

            // Send the combined data to the server
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    console.log(data);
                    // Handle response here. For example, redirect to a success page or show a success message.
                })
                .catch(error => {
                    console.error('Error:', error);
                    // Handle error here. For example, show an error message.
                });
        } else {
            // Show error message
            document.getElementById('errorMessage').textContent = "Please fill out all fields correctly.";
        }
    };
});