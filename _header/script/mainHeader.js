let menu = document.querySelector('#menu-icon');
let categories = document.querySelector('.menu');

menu.onclick = ()=> {
    categories.classList.toggle('open');

    if(categories.classList.contains('open')){
        menu.classList = 'fa-solid fa-xmark';
    }else{
        menu.classList = 'fa-solid fa-bars';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const navbarContainer = document.getElementById('nav-container');
    const navbarbg = navbarContainer.querySelector('.navbar-bg');

    document.addEventListener('scroll', function () {
        const scrollPosition = window.scrollY;
        const triggerPosition = window.innerHeight / 3.5;

        // Controlla se la posizione di scroll supera la soglia e aggiorna la trasformazione di conseguenza
        if (scrollPosition > triggerPosition) {
            // Fa scendere il .navbar-bg
            navbarbg.style.transform = 'translateY(0)';
            navbarbg.style.backgroundColor = 'black'; // Assicurati che lo sfondo sia nero
        } else {
            // Nasconde il .navbar-bg al di sopra della vista
            navbarbg.style.transform = 'translateY(-100%)';
        }
    });
});