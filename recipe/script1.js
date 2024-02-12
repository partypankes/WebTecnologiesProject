var uploadedFiles = [];

function aggiungiIconaEliminazione(elemento) {
    var iconaEliminazione = document.createElement('span');
    iconaEliminazione.className = 'icona-eliminazione';
    iconaEliminazione.innerHTML = '...';

    var menuEliminazione = document.createElement('div');
    menuEliminazione.className = 'menu-eliminazione';
    menuEliminazione.innerHTML = '<ul><li onclick="rimuoviElemento(this.closest(\'.procedimento-gruppo\'))">Elimina</li></ul>';
    menuEliminazione.style.display = 'none';

    iconaEliminazione.appendChild(menuEliminazione);
    iconaEliminazione.onclick = function(event) {
        event.stopPropagation(); // Impedisce al click di propagarsi agli elementi superiori
        var isMenuOpen = menuEliminazione.style.display === 'block';
        // Chiudi tutti i menu aperti
        document.querySelectorAll('.menu-eliminazione').forEach(function(menu) {
            menu.style.display = 'none';
        });
        // Apri o chiudi questo menu specifico
        menuEliminazione.style.display = isMenuOpen ? 'none' : 'block';
    };

    // Aggiungi l'icona all'interno dell'elemento specificato
    elemento.appendChild(iconaEliminazione);
}

document.addEventListener('click', function(event) {
    document.querySelectorAll('.menu-eliminazione').forEach(function(menu) {
        menu.style.display = 'none';
    });
});

function rimuoviElemento(elemento) {
    elemento.remove();
    aggiornaNumeriProcedimenti();
}





function aggiungiIngrediente() {
    var container = document.getElementById('ingredienti');
    var gruppo = document.createElement('div');
    gruppo.className = 'ingrediente-gruppo';

    var iconaEliminazione = document.createElement('span');
    iconaEliminazione.className = 'meno-eliminazione';
    iconaEliminazione.textContent = '-';
    iconaEliminazione.onclick = function() { rimuoviElemento(gruppo); };
    gruppo.appendChild(iconaEliminazione);

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
    var unita = ["grammi", "litri", /* altre unità */];
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


document.getElementById('inserimentoAnteprimeMarker').addEventListener('click', function() {
    document.getElementById('image-input').click();
});

document.getElementById('inserimentoAnteprimeMarker').addEventListener('dragover', function(event) {
    event.preventDefault();
});

document.getElementById('inserimentoAnteprimeMarker').addEventListener('drop', function(event) {
    event.preventDefault();
    var files = event.dataTransfer.files;
    handleFiles(files);
});

document.getElementById('image-input').addEventListener('change', function() {
    var files = this.files;
    handleFiles(files);
});


function handleFiles(files) {
    for (let i = 0; i < files.length; i++) {
        if (files[i].type.startsWith('image/')) {
            uploadedFiles.push(files[i]); // Aggiungi il file all'array
            var reader = new FileReader();
            reader.onload = function(e) {
                var anteprimaDiv = document.createElement('div');
                anteprimaDiv.className = 'anteprimaDiv';

                // Aggiungi l'icona di eliminazione
                var iconaEliminazione = document.createElement('i');
                iconaEliminazione.className = 'fas fa-trash icona-eliminazione';
                var img = document.createElement('img');
                img.src = e.target.result;

                anteprimaDiv.appendChild(iconaEliminazione);
                anteprimaDiv.appendChild(img);
                document.getElementById('inserimentoAnteprimeMarker').appendChild(anteprimaDiv);
                iconaEliminazione.addEventListener('click', function() {
                    var index = uploadedFiles.indexOf(files[i]);
                    if (index > -1) {
                        uploadedFiles.splice(index, 1); // Rimuovi il file dall'array
                        anteprimaDiv.remove(); // Rimuovi l'anteprima dell'immagine
                    }
                });
            };
            reader.readAsDataURL(files[i]);
        }
    }
}


function aggiungiProcedimento() {
    var container = document.getElementById('procedimentiContainer');
    var numeroProcedimenti = container.getElementsByClassName('procedimento-gruppo').length;
    var nuovoProcedimento = document.createElement('div');
    nuovoProcedimento.className = 'procedimento-gruppo';
    var spanNumero = document.createElement('span');
    spanNumero.className = 'procedimento-numero';
    spanNumero.textContent = (numeroProcedimenti + 1) + '.';
    nuovoProcedimento.appendChild(spanNumero);


    var inputProcedimento = document.createElement('input');
    inputProcedimento.type = 'text';
    inputProcedimento.className = 'procedimento';
    inputProcedimento.name = 'procedimentiRicetta[]';

    nuovoProcedimento.appendChild(spanNumero);
    nuovoProcedimento.appendChild(inputProcedimento);

    // Aggiungi l'icona di eliminazione
    var iconaEliminazione = document.createElement('div');
    iconaEliminazione.className = 'icona-eliminazione';
    iconaEliminazione.innerHTML = '...'; // Sostituire con un'icona se disponibile
    iconaEliminazione.onclick = function() { mostraOpzioniEliminazione(this); };
    nuovoProcedimento.appendChild(iconaEliminazione);

    // Inserisci il nuovo procedimento prima del pulsante "+"
    var aggiungiButton = document.querySelector('.aggiungi-procedimento');
    container.insertBefore(nuovoProcedimento, aggiungiButton);
    aggiungiIconaEliminazione(nuovoProcedimento);
}

function mostraOpzioniEliminazione(icona) {
    var conferma = confirm("Vuoi eliminare questo elemento?");
    if (conferma) {
        rimuoviElemento(icona);
    }
}



function aggiornaNumeriProcedimenti() {
    var procedimenti = document.querySelectorAll('.procedimento-gruppo');
    procedimenti.forEach((procedimento, indice) => {
        procedimento.querySelector('.procedimento-numero').textContent = (indice + 1) + '.';
    });
}


document.getElementById('ricettaForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Previene l'invio normale del form

    var formData = new FormData(document.getElementById('ricettaForm'));
    uploadedFiles.forEach(function(file, index) {
        if (file instanceof Blob) { // Assicurati che l'oggetto sia un Blob o File
            formData.append('images[]', file, file.name);
        } else {
            console.error('Un elemento nell\'array non è un file.', file);
        }
    });
    var xhr = new XMLHttpRequest();
    xhr.open("POST",'inserimento_ricetta.php', true);

    // Non è necessario impostare il Content-Type per FormData con multipart/form-data,
    // poiché l'oggetto XMLHttpRequest lo farà automaticamente, includendo anche il boundary.
    // xhr.setRequestHeader("Content-Type", "multipart/form-data"); // Questa linea è commentata intenzionalmente

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText); // Gestisce la risposta del server
        }
    };


    // Invia i dati del form, inclusi i file
    xhr.send(formData);
});