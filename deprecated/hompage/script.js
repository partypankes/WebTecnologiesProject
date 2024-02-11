document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar');
    const topBar = document.querySelector('.top_bar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', function () {
        let currentScroll = window.scrollY;
        let topBarHeight = topBar.offsetHeight;

        if (currentScroll > lastScrollTop && currentScroll > topBarHeight) {
            navbar.classList.add('active');
        } else if (currentScroll <= topBarHeight) {
            navbar.classList.remove('active');
        }

        checkVisibility(); 
    });

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.bottom > 0 && rect.right > 0 && 
            rect.left < (window.innerWidth || document.documentElement.clientWidth) && 
            rect.top < (window.innerHeight || document.documentElement.clientHeight);
    }
    
    function checkVisibility() {
        const animatedElements = document.querySelectorAll('.animated');
        animatedElements.forEach(function (element) {
            if (isInViewport(element)) {
                element.classList.add('isVisible');
            }
        });
    }
    
    checkVisibility(); 
});
