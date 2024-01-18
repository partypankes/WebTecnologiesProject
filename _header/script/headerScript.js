let menu = document.querySelector('#menu-icon');
let categories = document.querySelector('.menu');

menu.onclick = ()=> {
    categories.classList.toggle('open');
    menu.classList = categories.classList.contains('open') ?
        'fa-solid fa-xmark' :
        'fa-solid fa-bars' ;
}