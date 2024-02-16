//Chiamata Ajax per l'inserimento
document.getElementById('ricetta-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Previene l'invio normale del form

    var formData = new FormData(document.getElementById('ricetta-form'));
    banner.forEach(function(file, index) {
        if (file instanceof Blob) { // Assicurati che l'oggetto sia un Blob o File
            formData.append('images[]', file, file.name);
        } else {
            console.error('Un elemento nell\'array non è un file.', file);
        }
    });
    var xhr = new XMLHttpRequest();
    xhr.open("POST",'query_inserimentoRicetta.php', true);

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