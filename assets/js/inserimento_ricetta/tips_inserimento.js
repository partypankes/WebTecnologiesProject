function aggiungiTips() {
    var container = document.getElementById('tips');
    var gruppo = document.createElement('div');
    gruppo.className = 'ingrediente-gruppo';

    var iconaEliminazione = document.createElement('span');
    iconaEliminazione.className = 'meno-eliminazione';
    iconaEliminazione.textContent = '-';
    iconaEliminazione.onclick = function() { rimuoviElemento(gruppo); };
    gruppo.appendChild(iconaEliminazione);

    var inputTips = document.createElement('input');
    inputTips.type = 'text';
    inputTips.name = 'tips[]';
    inputTips.className = 'tips';
    inputTips.maxLength = 150;
    inputTips.autocomplete = "off";

    gruppo.appendChild(inputTips);

    container.insertBefore(gruppo, document.querySelector('.aggiungi-tips'));
}