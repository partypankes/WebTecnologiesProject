document.addEventListener("DOMContentLoaded", function () {
    const mediaContainer = document.querySelector(".media-container");
    const originalMediaItems = document.querySelectorAll(".media-container img, .media-container video");

    // Funzione per clonare e aggiungere elementi
    function cloneAndAppendItems() {
        originalMediaItems.forEach(item => {
            const clone = item.cloneNode(true);
            mediaContainer.appendChild(clone);
        });
    }

    // Clona inizialmente gli elementi
    cloneAndAppendItems();

    // Imposta i video
    function setupVideos() {
        const videos = mediaContainer.querySelectorAll("video");
        videos.forEach(video => {
            video.autoplay = true;
            video.load();
            video.muted = true;
            video.loop = true;
            video.removeAttribute("controls");
        });
    }

    setupVideos();

    // Funzione per spostare il contenitore
    function scrollMedia() {
        // Se siamo vicini alla fine, clona e aggiungi elementi
        if (mediaContainer.scrollLeft > mediaContainer.scrollWidth - mediaContainer.clientWidth - 100) {
            cloneAndAppendItems();
            setupVideos(); // Assicurati di impostare i nuovi video
        }

        if (mediaContainer.scrollLeft < mediaContainer.scrollWidth - mediaContainer.clientWidth) {
            mediaContainer.scrollLeft += 1;
        } else {
            mediaContainer.scrollLeft = 0;
        }
    }

    // Imposta l'intervallo per lo scorrimento
    setInterval(scrollMedia, 20);
});
