document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            if (data) {
                document.getElementById('errorMessage').textContent = data;
            } else {
                // Gestisci il login riuscito
            }
        });
});