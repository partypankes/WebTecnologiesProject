// Aspetta il completo caricamento del DOM prima di eseguire lo script
document.addEventListener('DOMContentLoaded', (event) => {
    // Seleziona tutte le sezioni e i link nella sidebar per la gestione della navigazione
    const sections = document.querySelectorAll('.section_show');
    const sidebarLinks = document.querySelectorAll('.sidebar a');

    // Funzione per nascondere tutte le sezioni e rimuovere la classe 'active' dai link della sidebar
    function resetActiveSection() {
        // Nasconde ogni sezione
        sections.forEach(section => {
            section.style.display = 'none';
        });
        // Rimuove la classe 'active' da ogni link nella sidebar
        sidebarLinks.forEach(link => {
            link.classList.remove('active');
        });
    }

    // Imposta la sezione Account come visibile all'avvio
    document.getElementById('account').style.display = 'block';
    // Imposta il primo link nella sidebar come attivo all'avvio
    document.querySelector('.sidebar a').classList.add('active');

    // Aggiunge un listener per ogni link nella sidebar per la navigazione
    sidebarLinks.forEach((link, index) => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // Previene il comportamento di default del link

            resetActiveSection(); // Resetta la sezione attiva e rimuove la classe 'active'


            link.classList.add('active'); // Imposta il link cliccato come attivo


            sections[index].style.display = 'block'; // Mostra la sezione corrispondente al link cliccato
        });

    });

    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const inserimento = urlParams.get('inserimento');

    if(inserimento === "true") {
        document.getElementById('inserimento_ricetta').click();
    }

});

function logout() {
    window.location.href = 'core/logout.php';
}






