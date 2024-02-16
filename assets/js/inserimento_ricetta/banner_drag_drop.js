var banner = [];
var eliminazioneInCorso = false;
var icon= document.getElementById('banner-ico');

document.getElementById('immagine_banner').addEventListener('click', function() {
    if(banner[0] === undefined &&  eliminazioneInCorso === false) {
        document.getElementById('input-banner').click();
    }
    eliminazioneInCorso = false;
});

document.getElementById('immagine_banner').addEventListener('dragover', function(event) {
    event.preventDefault();
});

document.getElementById('immagine_banner').addEventListener('drop', function(event) {
    event.preventDefault();
    var files = event.dataTransfer.files;

    handleFiles(files);
});

document.getElementById('input-banner').addEventListener('change', function() {
    var files = this.files;
    let icon= document.getElementById('banner-ico');
    handleFiles(files);
});



//Funzione HandleFile relativa al banner, crea un'anteprima e si occupa dell'immagine
function handleFiles(files) {
    icon.style.display = "none";
        if (files[0].type.startsWith('image/') && banner[0] === undefined) {
            banner.push(files[0]); // Aggiungi il file all'array
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
                document.getElementById('immagine_banner').appendChild(anteprimaDiv);
                iconaEliminazione.addEventListener('click', function() {
                    icon.style.display = "block";

                    eliminazioneInCorso = true;
                    var index = banner.indexOf(files[0]);
                    if (index > -1) {
                        banner.splice(index, 1); // Rimuovi il file dall'array
                        anteprimaDiv.remove(); // Rimuovi l'anteprima dell'immagine
                        document.getElementById('input-banner').value = "";
                    }


                });
            };
            reader.readAsDataURL(files[0]);
        }

}