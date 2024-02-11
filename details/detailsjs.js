function caricaContenuto(sezione) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'details_query.php?section=' + encodeURIComponent(sezione), true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            // Aggiorna il contenuto della pagina con la risposta
            document.getElementById('recipe-content').innerHTML = xhr.responseText;
        } else {
            document.getElementById('recipe-content').innerHTML = '<table border="1" id="tabella-ingredienti"><tr><th>Numero</th><th>Quantità</th><th>Nome Ingrediente</th></tr></table>';
        }
    };

    xhr.onerror = function () {
        console.error('Errore nella richiesta di rete');
    };

    xhr.send();
}

document.querySelectorAll('#contents a').forEach(function(link) {
    link.addEventListener('click', function() {
        document.querySelectorAll('#contents a').forEach(function(l) {
            l.classList.remove('active');
        });
        link.classList.add('active');
    });
});

document.addEventListener("DOMContentLoaded", function() {
    // Aggiunge la classe 'active' al primo elemento della lista
    var firstElement = document.querySelector('#contents a:first-child');
    firstElement.classList.add('active');

    // Aggiungi un listener per tutti gli elementi '#contents a'
    var links = document.querySelectorAll('#contents a');
    links.forEach(function(link) {
        link.addEventListener('click', function() {
            // Rimuove la classe 'active' da tutti gli elementi
            links.forEach(function(lnk) {
                lnk.classList.remove('active');
            });

            // Aggiunge la classe 'active' all'elemento cliccato
            this.classList.add('active');
        });
    });
});
let currentIndex = 0;
const slides = document.querySelectorAll('.carousel-slide');
const totalSlides = slides.length;

function updateCarousel() {
    slides.forEach((slide, index) => {
        let degree = (index - currentIndex) * 45; // Regola per modificare l'angolazione e la distanza tra gli slide
        slide.style.transform = `rotateY(${degree}deg) translateZ(500px)`;
        slide.style.opacity = index === currentIndex ? 1 : 0.5;
    });
}

document.getElementById('next').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalSlides;
    updateCarousel();
});

document.getElementById('prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
    updateCarousel();
});

updateCarousel(); // Inizializza il carosello
