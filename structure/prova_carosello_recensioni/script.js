document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('slider');
    const sliderItems = slider.querySelectorAll('.review');
    let isCloning = false;

    // Funzione per clonare gli elementi dello slider
    function cloneSliderItems() {
        if (isCloning) return; // Previene la clonazione multipla durante l'operazione
        isCloning = true;

        sliderItems.forEach(item => {
            const clone = item.cloneNode(true); // Clona profondamente l'elemento
            slider.appendChild(clone); // Aggiunge il clone alla fine dello slider
        });

        isCloning = false;
    }

    // Funzione per controllare quando clonare e aggiungere elementi
    function checkAndCloneItems() {
        const sliderRect = slider.getBoundingClientRect();
        const containerRect = slider.parentNode.getBoundingClientRect();

        // Se la fine dello slider è vicina alla fine del suo contenitore, clona gli elementi
        if (sliderRect.right < containerRect.right + 500) { // 500 è un buffer arbitrario; regola secondo necessità
            cloneSliderItems();
        }
    }

    // Imposta l'intervallo per controllare periodicamente la necessità di clonare elementi
    setInterval(checkAndCloneItems, 100);

    // Inizia lo scorrimento iniziale
    let initialOffset = 0;
    function startScrolling() {
        initialOffset -= 0.6; // Regola questo valore per controllare la velocità di scorrimento
        slider.style.transform = `translateX(${initialOffset}px)`;

        requestAnimationFrame(startScrolling);
    }

    startScrolling();
});
