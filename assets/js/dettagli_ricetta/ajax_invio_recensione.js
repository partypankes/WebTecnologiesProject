document.getElementById('review-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const queryString = window.location.search;

        const urlParams = new URLSearchParams(queryString);

        const id = urlParams.get('id');


        var formData = new FormData(document.getElementById('review-form'));
        formData.append('id', id);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", 'core/dettagli_ricetta/inserimento_recensione.php', true);


        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('reviews-container').innerHTML = xhr.responseText;
            }
        };


        xhr.send(formData);

});


