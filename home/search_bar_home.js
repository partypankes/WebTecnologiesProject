let search_bar = document.getElementById('search');


document.addEventListener('DOMContentLoaded', function() {
    search_bar.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {

            event.preventDefault();
            document.getElementById("search_button").click();
        }

    });
    document.getElementById("search_button").addEventListener("click", function (event) {
        event.preventDefault();
        window.location.href = "../ricerca_ricette/ricette.php?input=" + search_bar.value;

    });
});


