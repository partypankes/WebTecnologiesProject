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

    var xhr = new XMLHttpRequest();
    xhr.open("POST",'query_ricerca.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };


    xhr.send("tempo_preparazione=" + encodeURIComponent(tempo_box) + "&portata=" + encodeURIComponent(portata_box));

}