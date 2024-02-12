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

/*
* function caricaContenuto(sezione) {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'details_query.php?section=' + encodeURIComponent(sezione), true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            // Prepara il contenitore per la transizione aggiornando l'altezza
            const contenitore = document.getElementById('recipe-content');
            const altezzaIniziale = contenitore.offsetHeight;

            contenitore.style.height = altezzaIniziale + 'px'; // Imposta l'altezza iniziale per iniziare la transizione

            requestAnimationFrame(() => {
                // Aggiorna il contenuto della pagina con la risposta
                contenitore.innerHTML = xhr.responseText;

                // Calcola la nuova altezza necessaria
                const altezzaFinale = contenitore.scrollHeight + "px";

                // Applica la nuova altezza per avviare la transizione
                contenitore.style.height = altezzaFinale;

                // Reset dell'altezza a 'auto' dopo la transizione per adattarsi al contenuto variabile
                contenitore.addEventListener('transitionend', function(e) {
                    if (e.propertyName === 'height') {
                        contenitore.style.height = 'auto';
                    }
                }, {once: true}); // Assicura che l'event listener sia chiamato solo una volta
            });
        } else {
            document.getElementById('recipe-content').innerHTML = '<table border="1" id="tabella-ingredienti"><tr><th>Numero</th><th>Quantità</th><th>Nome Ingrediente</th></tr></table>';
        }
    };

    xhr.onerror = function () {
        console.error('Errore nella richiesta di rete');
    };

    xhr.send();
}
*/

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

/*

let currentIndex = 0;
const slides = document.querySelectorAll('.carousel-slide');
const totalSlides = slides.length;
const carouselContainer = document.querySelector('.carousel');
const slideWidth = slides[0].getBoundingClientRect().width + 10; // Larghezza dello slide più margine

function updateCarousel() {
    carouselContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

document.getElementById('next').addEventListener('click', () => {
    currentIndex = Math.min(currentIndex + 1, totalSlides - 1);
    updateCarousel();
});

document.getElementById('prev').addEventListener('click', () => {
    currentIndex = Math.max(currentIndex - 1, 0);
    updateCarousel();
});

updateCarousel(); // Inizializza il carosello

 */