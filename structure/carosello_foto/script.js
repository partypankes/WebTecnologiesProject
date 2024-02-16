let currentIndex = 0;
const slides = document.querySelectorAll('.carousel-slide');
const totalSlides = slides.length;
const carouselContainer = document.querySelector('.carousel');
function updateCarouselHeight() {
    const activeSlide = document.querySelector('.carousel-slide.active');
    const scaleIncrease = 1.1; // Lo stesso fattore di scala usato nel CSS
    const originalHeight = 400; // Altezza originale delle immagini
    const scaledHeight = originalHeight * scaleIncrease; // Calcola la nuova altezza basata sullo zoom
    document.querySelector('.carousel').style.height = `${scaledHeight}px`; // Aggiorna l'altezza del carosello
}
function updateCarousel() {
    slides.forEach((slide, index) => {
        slide.classList.remove('active'); // Remove active class from all slides
        if (index === currentIndex) {
            slide.classList.add('active'); // Add active class to current slide
        }
    });
    const activeSlide = slides[currentIndex];
    const slideOffset = activeSlide.offsetLeft - carouselContainer.offsetLeft; // Calculate offset to center the active slide
    carouselContainer.scrollLeft = slideOffset - (carouselContainer.offsetWidth / 2 - activeSlide.offsetWidth / 2); // Center the active slide
}

document.getElementById('next').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % totalSlides; // Cycle through slides
    updateCarousel();
});

document.getElementById('prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + totalSlides) % totalSlides; // Cycle through slides in reverse
    updateCarousel();
});

updateCarousel(); // Initialize the carousel with the first slide as active
