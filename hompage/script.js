let currentIndex = 0;
const images = document.querySelectorAll(".carousel-inner img");
const totalImages = images.length;

function moveCarousel() {
    currentIndex++;
    if (currentIndex >= totalImages) {
        currentIndex = 0;
    }
    const newTransformValue = currentIndex * -100;
    document.querySelector(".carousel-inner").style.transform = `translateX(${newTransformValue}%)`;
}

// Imposta il carosello per scorrere ogni 3 secondi
setInterval(moveCarousel, 3000);
