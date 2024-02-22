let tempo = document.getElementsByName('tempo');

let portata = document.getElementsByName('portata');

let search_bar = document.getElementById('search');

const params = new URLSearchParams(window.location.search);

const input = params.get('input');

if (input !== null) {
    search_bar.value = input;
    
}

document.addEventListener('DOMContentLoaded', function() {

    search_bar.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {

            event.preventDefault();
            document.getElementById("search_button").click();
        }

    });
    document.getElementById("search_button").addEventListener("click", function (event) {
        event.preventDefault();
        richiedi_pagina(1);

    });

    richiedi_pagina(1);

});

function richiedi_pagina(np) {

    var portata_box;
    var tempo_box;


    var ricerca = search_bar.value;

    portata.forEach(function(checkbox) {
        if(checkbox.checked) {
            portata_box = checkbox.value;
        }
    });

    tempo.forEach(function (checkbox){
        if(checkbox.checked) {
            tempo_box = checkbox.value;
        }
    });

    var risultati = document.getElementById('sezione-ricette');
    risultati.innerHTML = "Caricamento...";

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "core/ricerca_ricette/query_ricerca.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4 && xhr.status === 200) {
            risultati.innerHTML = xhr.responseText;
        }
    }

    xhr.send("tempo_preparazione=" + encodeURIComponent(tempo_box) + "&portata=" + encodeURIComponent(portata_box) + "&ricerca=" + encodeURIComponent(ricerca) + "&np=" + encodeURIComponent(np));

}

function toggleFilter(filterId) {
    var answer = document.getElementById(filterId);
    var question = answer.previousElementSibling;
    question.classList.toggle("active");
    answer.classList.toggle("active");
}
