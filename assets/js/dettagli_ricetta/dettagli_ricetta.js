function caricaContenuto(sezione) {

    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const id = urlParams.get('id');

    var xhr = new XMLHttpRequest();
    xhr.open('GET',  'core/dettagli_ricetta/dettagli_ricetta_query.php?section=' + encodeURIComponent(sezione) + '&id=' + encodeURIComponent(id), true);

    xhr.onload = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {

            document.getElementById('recipe-content').innerHTML = xhr.responseText;
        }
    };

    xhr.onerror = function () {
        console.error('Errore nella richiesta di rete');
    };

    xhr.send();
}

document.addEventListener("DOMContentLoaded", function() {
    // Trova il primo link all'interno dell'elemento con id 'contents' e lo assegna alla variabile 'firstElement'.
    var firstElement = document.querySelector('#contents a:first-child');
    // Aggiunge la classe 'active' al primo elemento trovato per evidenziarlo come attivo.
    firstElement.classList.add('active');

    // Seleziona tutti gli elementi 'a' (link) all'interno dell'elemento con id 'contents' e li assegna alla variabile 'links'.
    var links = document.querySelectorAll('#contents a');
    // Itera su ogni elemento 'link' trovato.
    links.forEach(function(link) {
        // Aggiunge un listener per l'evento 'click' a ogni link.
        link.addEventListener('click', function() {
            // Quando un link viene cliccato, rimuove la classe 'active' da tutti i link per resettare lo stato attivo.
            links.forEach(function(lnk) {
                lnk.classList.remove('active');
            });

            // Aggiunge la classe 'active' al link cliccato per marcarlo come attivo.
            this.classList.add('active');
        });
    });

    // Chiama la funzione 'caricaContenuto' con l'argomento 'ingredienti' per caricare il contenuto iniziale.
    caricaContenuto('ingredienti');
});



