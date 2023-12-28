document.addEventListener("DOMContentLoaded", function () {
    const mediaContainer = document.querySelector(".media-container");
    let mediaItems = document.querySelectorAll(".media-container img, .media-container video");

    // Funzione per clonare e aggiungere elementi
    function cloneAndAppendItems() {
        mediaItems.forEach(item => {
            const clone = item.cloneNode(true);
            mediaContainer.appendChild(clone);
        });
        mediaItems = document.querySelectorAll(".media-container img, .media-container video");
    }

    // Clona inizialmente gli elementi
    cloneAndAppendItems();

     // Avvia i video automaticamente e disattiva l'audio
     const videos = document.querySelectorAll(".media-container video");
     videos.forEach(video => {
         video.autoplay = true;
         video.load();
         video.muted = true; // Disattiva l'audio
         video.loop=1;
         video.removeAttribute("controls"); // Rimuove i controlli
     });

    // Funzione per spostare il contenitore
    function scrollMedia() {
        if (mediaContainer.scrollLeft < mediaContainer.scrollWidth - mediaContainer.clientWidth) {
            mediaContainer.scrollLeft += 1;
        } else {
            mediaContainer.scrollLeft = 0;
        }
    }

    // Imposta l'intervallo per lo scorrimento
    setInterval(scrollMedia, 20);
});
