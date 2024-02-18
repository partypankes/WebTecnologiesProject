function toggleFilter(filterId) {
    var answer = document.getElementById(filterId);
    var question = answer.previousElementSibling;
    question.classList.toggle("active");
    answer.classList.toggle("active"); // Assicurati che anche .filter-answer abbia la classe "active" per l'animazione
}
