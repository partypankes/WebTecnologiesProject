let tempo = document.getElementsByName('tempo');

let portata = document.getElementsByName('portata');

let search_bar = document.getElementById('search'); // Assicurati che questo sia l'ID corretto
let ricerca;


document.addEventListener('DOMContentLoaded', function() {
    search_bar.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {

            event.preventDefault();
            document.getElementById("search_button").click();
        }

    });
    document.getElementById("search_button").addEventListener("click", function (event) {
        event.preventDefault();
        submitFilter();

    });
});

console.log(portata);

function submitFilter(){
    var portata_box;
    var tempo_box;


    ricerca = search_bar.value;

    portata.forEach(function(checkbox) {
        if(checkbox.checked) {
            portata_box = checkbox.value;
        }
    });

    tempo.forEach(function (checkbox){
       if(checkbox.checked) {
           tempo_box = checkbox.value;
       }
    });


    var xhr = new XMLHttpRequest();
    xhr.open("POST",'/gruppo10/ricerca_ricette/query_ricerca.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('sezione-ricette').innerHTML = xhr.responseText;

        }
    };



    xhr.send("tempo_preparazione=" + encodeURIComponent(tempo_box) + "&portata=" + encodeURIComponent(portata_box) + "&ricerca=" + encodeURIComponent(ricerca));


}
