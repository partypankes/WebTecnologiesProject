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
        event.stopPropagation();
        var isMenuOpen = menuEliminazione.style.display === 'block';

        document.querySelectorAll('.menu-eliminazione').forEach(function(menu) {
            menu.style.display = 'none';
        });

        menuEliminazione.style.display = isMenuOpen ? 'none' : 'block';
    };


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
    inputIngrediente.placeholder = 'Nome';
    inputIngrediente.maxLength = 40;
    inputIngrediente.autocomplete = "off";

    var inputQuantita = document.createElement('input');
    inputQuantita.type = 'number';
    inputQuantita.name = 'quantita[]';
    inputQuantita.className = 'quantita';
    inputQuantita.placeholder = 'Quantità';
    inputQuantita.min = "1" // Aggiungi il placeholder
    inputQuantita.max = "999";
    inputQuantita.autocomplete = "off";


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
    var unita = ["n/a","grammi","chili", "litri","millilitri","cucchiai","cucchiaini"];
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


document.getElementById('ricetta-form').onsubmit = function(event) {
    var categoria = document.getElementById('categoriaRicetta').value;
    if (categoria === "") {
        event.preventDefault();
    }
};

function nascondiOpzioneIniziale() {
    var selectElement = document.getElementById('categoriaRicetta');
    selectElement.options[0].hidden = true; // Nasconde l'opzione iniziale
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
    inputProcedimento.maxLength = 250;
    inputProcedimento.autocomplete = "off";

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

