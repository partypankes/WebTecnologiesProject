document.addEventListener('DOMContentLoaded', function () {
    const navbarContainer = document.getElementById('nav-container');
    const navbarbg = navbarContainer.querySelector('.navbar-bg');

    document.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY;
        const triggerPosition = window.innerHeight / 4;

        // Controlla se la posizione di scroll supera la soglia e aggiorna la trasformazione di conseguenza
        if (scrollPosition > triggerPosition) {
            // Fa scendere il .navbar-bg
            navbarbg.style.transform = 'translateY(0)';
        } else {
            // Nasconde il .navbar-bg al di sopra della vista
            navbarbg.style.transform = 'translateY(-100%)';
        }
    });
});