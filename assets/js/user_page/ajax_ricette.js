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