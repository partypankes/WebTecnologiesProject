document.addEventListener('DOMContentLoaded', (event) => {
    const sections = document.querySelectorAll('.section_show');
    const sidebarLinks = document.querySelectorAll('.sidebar a');
    function resetActiveSection() {
        sections.forEach(section => {
            section.style.display = 'none';
        });
        sidebarLinks.forEach(link => {
            link.classList.remove('active');
        });
    }

    // Imposta la sezione Account come attiva all'avvio
    document.getElementById('account').style.display = 'block';
    document.querySelector('.sidebar a').classList.add('active');

    sidebarLinks.forEach((link, index) => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            resetActiveSection();


            link.classList.add('active');


            sections[index].style.display = 'block';
        });
    });
});
