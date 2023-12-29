document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar');
    const topBar = document.querySelector('.top_bar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function () {
        let currentScroll = window.scrollY;
        let topBarHeight = topBar.offsetHeight;

        if (currentScroll > lastScrollTop && currentScroll > topBarHeight) {
            // Scroll verso il basso e superata l'altezza della top bar
            navbar.classList.add('active');
        } else if (currentScroll <= topBarHeight) {
            // Scroll verso l'alto e rientrato nell'area della top bar
            navbar.classList.remove('active');
        }

        lastScrollTop = currentScroll;
    });
});
