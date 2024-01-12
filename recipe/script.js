function aggiungiIngrediente() {
    var container = document.getElementById('ingredienti');
    var input = document.createElement('input');
    input.type = 'text';
    input.className = 'ingrediente';
    input.name = 'ingredienti[]';
    container.appendChild(input);
}
function aggiungiImmagine() {
    var container = document.getElementById('immagini');
    var input = document.createElement('input');
    input.type = 'file';
    input.className = 'immagineRicetta';
    input.onchange = mostraAnteprima; // Aggiunta della funzione per mostrare l'anteprima
    container.appendChild(input);
}

function mostraAnteprima(event) {
    var files = event.target.files;
    var anteprimaContainer = document.getElementById('anteprimaImmagine');
    anteprimaContainer.innerHTML = ''; // Pulisce le anteprime precedenti

    Array.from(files).forEach(file => {
        var reader = new FileReader();
        reader.onload = function (e) {
            var img = document.createElement('img');
            img.src = e.target.result;
            img.style.marginRight = '10px';
            anteprimaContainer.appendChild(img);
        }
        reader.readAsDataURL(file);
    });
}
document.getElementById('ricettaForm').onsubmit = function(event) {
    var categoria = document.getElementById('categoriaRicetta').value;
    if (categoria === "") {
        alert("Per favore, seleziona una categoria per la ricetta.");
        event.preventDefault();
    }
};

function nascondiOpzioneIniziale() {
    var selectElement = document.getElementById('categoriaRicetta');
    selectElement.options[0].hidden = true; // Nasconde l'opzione iniziale
}




