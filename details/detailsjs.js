const sectionTexts = {
    ingredients: `<p>Lorem ipsum dolor sit amet...</p>`,
    preparation: `<p>Vestibulum sit amet quam ac diam...</p>`,
    servingSuggestions: `<p>Quisque ligula ac diam...</p>`,
    tipsTricks: `<p>Donec aliquam, mauris id aliquam...</p>`
};

document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('#contents a');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            // Rimuovi la classe 'active' da tutti i link
            links.forEach(l => l.classList.remove('active'));

            // Aggiungi la classe 'active' al link cliccato
            link.classList.add('active');

            // Carica il contenuto corrispondente
            const section = event.target.dataset.section.replace(/-([a-z])/g, function (g) { return g[1].toUpperCase(); });
            document.getElementById('recipe-content').innerHTML = sectionTexts[section];
        });
    });
});

