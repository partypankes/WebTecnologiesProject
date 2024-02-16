document.addEventListener('DOMContentLoaded', function () {
    var faqQuestions = document.querySelectorAll('.domanda-faq');

    faqQuestions.forEach(function (question) {
        question.addEventListener('click', function () {
            var answer = this.nextElementSibling;
            var isOpen = answer.style.maxHeight;
            closeAllAnswers(faqQuestions);

            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + "px";
                this.classList.add('active');
            } else {
                this.classList.remove('active');
            }
        });
    });

    function closeAllAnswers(faqQuestions) {
        faqQuestions.forEach(function (question) {
            question.nextElementSibling.style.maxHeight = null;
            question.classList.remove('active');
        });
    }
});
