let tempo = document.getElementsByName('tempo');


let portata = document.getElementsByName('portata');
console.log(portata);

function submitFilter(){
    var portata_box;
    var tempo_box;



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

    var query = "SELECT * FROM ricetta WHERE tempo_preparazione = <" + tempo_box + "AND portata = " + portata_box + ";";

    var xhr = new XMLHttpRequest();
    xhr.open("POST",'query_ricerca.php', true);



    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };


    xhr.send(query);

}