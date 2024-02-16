let menu = document.querySelector('#menu-icon');
let categories = document.querySelector('.menu');

menu.onclick = ()=> {
    categories.classList.toggle('open');

    if (categories.classList.contains('open')) {
        menu.classList = 'fa-solid fa-xmark';
    } else {
        menu.classList = 'fa-solid fa-bars';
    }
}