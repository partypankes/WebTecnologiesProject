// Attende che il documento sia completamente caricato prima di eseguire il codice JavaScript
document.addEventListener('DOMContentLoaded', function () {
    // Seleziona tutti gli elementi con classe 'domanda-faq' e li assegna alla variabile 'faqQuestions'
    var faqQuestions = document.querySelectorAll('.domanda-faq');

    // Itera su ogni elemento 'question' dentro 'faqQuestions'
    faqQuestions.forEach(function (question) {
        // Aggiunge un listener di eventi che reagisce ai click su ogni domanda
        question.addEventListener('click', function () {
            // Trova l'elemento successivo a 'question', la risposta, e lo assegna a 'answer'
            var answer = this.nextElementSibling;
            // Controlla se 'answer' è già aperto controllando la proprietà 'maxHeight'
            var isOpen = answer.style.maxHeight;
            // Chiama la funzione 'closeAllAnswers' per chiudere tutte le risposte prima di aprire/chiudere l'attuale
            closeAllAnswers(faqQuestions);

            // Se 'answer' non è aperto (maxHeight non impostato), allora apri 'answer'
            if (!isOpen) {
                // Imposta 'maxHeight' di 'answer' al suo 'scrollHeight', permettendo di vederlo completamente
                answer.style.maxHeight = answer.scrollHeight + "px";
                // Aggiungi la classe 'active' a 'question' per indicare che è attiva/aperta
                this.classList.add('active');
            } else {
                // Se 'answer' è già aperto, rimuovi la classe 'active', indicando che sarà chiuso
                this.classList.remove('active');
            }
        });
    });

    // Chiude tutte le risposte e rimuove la classe 'active'
    function closeAllAnswers(faqQuestions) {
        // Itera su ogni 'question' in 'faqQuestions'
        faqQuestions.forEach(function (question) {
            // Imposta 'maxHeight' dell'elemento successivo (la risposta) a null, nascondendolo
            question.nextElementSibling.style.maxHeight = null;
            // Rimuove la classe 'active' da 'question', indicando che non è più la domanda selezionata
            question.classList.remove('active');
        });
    }
});
