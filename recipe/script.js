function aggiungiIngrediente() {
    var container = document.getElementById('ingredienti');
    var gruppo = document.createElement('div');
    gruppo.className = 'ingrediente-gruppo';

    var inputIngrediente = document.createElement('input');
    inputIngrediente.type = 'text';
    inputIngrediente.name = 'ingredienti[]';
    inputIngrediente.className = 'ingrediente';

    var inputQuantita = document.createElement('input');
    inputQuantita.type = 'text';
    inputQuantita.name = 'quantita[]';
    inputQuantita.className = 'quantita';
    inputQuantita.placeholder = 'Quantità'; // Aggiungi il placeholder

    var selectUnita = document.createElement('select');
    selectUnita.name = 'unita[]';
    selectUnita.className = 'unita';

    // Aggiungi l'opzione di placeholder
    var optionPlaceholder = document.createElement('option');
    optionPlaceholder.value = "";
    optionPlaceholder.disabled = true;
    optionPlaceholder.selected = true;
    optionPlaceholder.textContent = '-'; // Usa textContent o innerText
    selectUnita.appendChild(optionPlaceholder);

    // Aggiungi le altre opzioni
    var unita = ["g", "ml", /* altre unità */];
    unita.forEach(function(u) {
        var option = document.createElement('option');
        option.value = u;
        option.textContent = u; // Usa textContent o innerText
        selectUnita.appendChild(option);
    });

    gruppo.appendChild(inputIngrediente);
    gruppo.appendChild(inputQuantita);
    gruppo.appendChild(selectUnita);
    container.insertBefore(gruppo, document.querySelector('.aggiungi-ingrediente'));
}

function clearPlaceholder(element) {
    element.placeholder = '';
}

function restorePlaceholder(element, defaultPlaceholder) {
    element.placeholder = element.getAttribute('data-placeholder') || defaultPlaceholder;
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




