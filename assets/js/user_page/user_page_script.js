document.addEventListener('DOMContentLoaded', (event) => {
    const sections = document.querySelectorAll('.section_show');
    const sidebarLinks = document.querySelectorAll('.sidebar a');
    function resetActiveSection() {
        sections.forEach(section => {
            section.style.display = 'none';
        });
        sidebarLinks.forEach(link => {
            link.classList.remove('active');
        });
    }

    // Imposta la sezione Account come attiva all'avvio
    document.getElementById('account').style.display = 'block';
    document.querySelector('.sidebar a').classList.add('active');

    sidebarLinks.forEach((link, index) => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            resetActiveSection();


            link.classList.add('active');


            sections[index].style.display = 'block';
        });
    });

    //Ajax Form Anagrafica
    var form = document.getElementById('anagrafica');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        let xhr = new XMLHttpRequest();

        xhr.open('POST', 'core/user_page/update_dati_utente.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Passa showFormAnagrafica come callback a fetch_dati
                document.getElementById("content-anagrafica").innerHTML = xhr.responseText;
                showFormAnagrafica();
            }
        };
        xhr.send(formData);
    });

});

let bool = true;
function showFormAnagrafica(){
    bool = !bool;

    let form_anagrafica = document.getElementById('anagrafica');
    let anagrafica = document.querySelector('.anagrafica');
    if(bool){
        form_anagrafica.style.display = "none";
        anagrafica.style.display = "block";
    }else{
        form_anagrafica.style.display = "block";
        anagrafica.style.display = "none";
    }

}


// Modifica il listener del form per utilizzare la callback

