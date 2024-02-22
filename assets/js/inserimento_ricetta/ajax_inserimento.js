
function ajax_inserimento() {
    var formData = new FormData(document.getElementById('ricetta-form'));
    banner.forEach(function(file, index) {
        if (file instanceof Blob) {
            formData.append('images[]', file, file.name);
        }
    });
    var xhr = new XMLHttpRequest();
    xhr.open("POST",'core/query_inserimentoRicetta.php', true);


    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            window.location.href = 'dettagli_ricetta.php?id=' + xhr.responseText;
        }
    };


    xhr.send(formData);

}

