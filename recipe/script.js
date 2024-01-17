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


function aggiungiImmagine() {
    var immaginiContainer = document.getElementById('immaginiContainer');
    var nuovoInput = document.createElement('input');
    nuovoInput.type = 'file';
    nuovoInput.className = 'input-immagine';
    nuovoInput.name = 'immagineRicetta[]';
    nuovoInput.accept = 'image/png, image/jpeg';
    nuovoInput.onchange = function() { mostraAnteprima(this); };
    immaginiContainer.appendChild(nuovoInput);
}

function mostraAnteprima(input) {
    if (input.files) {
        Array.from(input.files).forEach(file => {
            if (file) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var anteprimaDiv = document.createElement('div');
                    anteprimaDiv.className = 'anteprimaDiv';

                    var img = document.createElement('img');
                    img.src = e.target.result;

                    anteprimaDiv.appendChild(img);

                    var immaginiContainer = document.getElementById('immaginiContainer');
                    immaginiContainer.insertBefore(anteprimaDiv, input);
                };
                reader.readAsDataURL(file);
            }
        });
        // Nascondi l'input file originale dopo aver selezionato un'immagine
        input.style.display = 'none';
    }
}

function aggiungiProcedimento() {
    var container = document.getElementById('procedimentiContainer');
    var numeroProcedimenti = container.getElementsByClassName('procedimento-gruppo').length;
    var nuovoProcedimento = document.createElement('div');
    nuovoProcedimento.className = 'procedimento-gruppo';
    nuovoProcedimento.id = 'procedimento' + (numeroProcedimenti + 1);

    var spanNumero = document.createElement('span');
    spanNumero.className = 'procedimento-numero';
    spanNumero.textContent = (numeroProcedimenti + 1) + '.';

    var inputProcedimento = document.createElement('input');
    inputProcedimento.type = 'text';
    inputProcedimento.className = 'procedimento';
    inputProcedimento.name = 'procedimentiRicetta[]';

    nuovoProcedimento.appendChild(spanNumero);
    nuovoProcedimento.appendChild(inputProcedimento);

    // Inserisci il nuovo procedimento prima del pulsante "+"
    var aggiungiButton = document.querySelector('.aggiungi-procedimento');
    container.insertBefore(nuovoProcedimento, aggiungiButton);
}



