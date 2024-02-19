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
    caricaContenuto('ingredienti');
});



