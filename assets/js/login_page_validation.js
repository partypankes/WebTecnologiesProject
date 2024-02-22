document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);
    let xhr = new XMLHttpRequest();

    xhr.open("POST", 'core/login.php',true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
                var data = xhr.responseText;
                if (data) {
                    document.getElementById('errorMessage_login').textContent = data;
                } else {
                    window.location.href = 'homepage.php';
                }
            } else {
                console.error('Errore nella richiesta: ' + xhr.statusText);
            }
        }


    xhr.open('POST', 'core/login.php', false);

    xhr.send(formData);
});

document.getElementById('togglePassword').addEventListener('click', function () {
    const password = document.getElementById('password');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});


function clearPlaceholder(element) {
    element.placeholder = '';
}

function restorePlaceholder(element, defaultPlaceholder) {
    element.placeholder = element.getAttribute('data-placeholder') || defaultPlaceholder;
}


