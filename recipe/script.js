function aggiungiIngrediente() {
    var container = document.getElementById('ingredienti');
    var input = document.createElement('input');
    input.type = 'text';
    input.className = 'ingrediente';
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



