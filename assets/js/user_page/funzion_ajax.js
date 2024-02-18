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

function ajax_recensioni() {
    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'core/user_page/recensioni_utente.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Passa showFormAnagrafica come callback a fetch_dati
            document.getElementById("utente-reviews").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}

function eliminaRecensione(id) {
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'core/user_page/eliminazione_recensione.php?id=' + encodeURIComponent(id), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Passa showFormAnagrafica come callback a fetch_dati
            document.getElementById("utente-reviews").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
}