function ajax_ricette() {
    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'core/user_page/ricette_utente.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Passa showFormAnagrafica come callback a fetch_dati
            document.getElementById("post-section").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}



function eliminaRecensione(id) {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'core/user_page/eliminazione_recensione.php?id=' + encodeURIComponent(id), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            richiedi_recensione_utente(1);

        }
    };
    xhr.send();
}

function richiedi_post_utente(np) {

        var risultati = document.getElementById('post-section');
        risultati.innerHTML = "caricamento...";

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "core/user_page/ricette_utente.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if(xhr.readyState === 4 && xhr.status === 200) {
                risultati.innerHTML = xhr.responseText;
            }
        }

        xhr.send("np=" + encodeURIComponent(np));


}

function eliminaRicetta(id) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "core/user_page/eliminaRicetta.php?id=" + encodeURIComponent(id), true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4 && xhr.status === 200) {
            richiedi_post_utente(1);
        }
    }

    xhr.send();
}

function richiedi_recensione_utente(np) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "core/user_page/recensioni_utente.php?np=", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("utente-reviews").innerHTML = xhr.responseText;
        }
    }

    xhr.send("np=" + encodeURIComponent(np));
}