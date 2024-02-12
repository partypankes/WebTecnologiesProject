let check = document.querySelectorAll('.filtro');
console.log(check);

let portata = document.getElementsByName('portata');
console.log(portata);

function submitFilter(){
    var checked_box;
    portata_box = [];
    tempo_box = [];

    portata.forEach(function(checkbox) {
        if(checkbox.checked) {
            checked_box.push(checkbox.value);
        }
    });


    console.log(checked_box);
}