var uploadedFiles = [];

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