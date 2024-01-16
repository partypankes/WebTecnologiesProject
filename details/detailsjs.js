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

function createTable(data) {
    var table = document.getElementById("tabella-ingredienti");
    for (var i = 0; i < data.length; i++) {
        var row = table.insertRow(i + 1);
        var cell1 = row.insertCell(0);


        cell1.innerHTML = data[i];
        }
}
