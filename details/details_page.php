<?php include 'query_function.php';
require '../auth/auth.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homemade Pizza Recipe - Delicious and Easy</title>
    <meta name="description" content="A delicious and easy homemade pizza recipe by John Doe">
    <meta name="author" content="John Doe">
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>




<body>
<?php
//da poter cambiare nel caso l'utente sia registrato o meno
//include('../_header/baseHeader.php');
?>
<main>
    <section id="title">
        <div class="text"><?php name_and_user(13)?>
        </div>
        <div class="photo">
            <img src="<?php echo immagine_banner(13)?>" alt="Homemade Pizza">
        </div>
    </section>


    <section id="details">
        <div id="contents">
            <ul>
                <li><a  onclick="caricaContenuto('ingredienti')" data-section="ingredients">Ingredients</a></li>
                <li><a  onclick="caricaContenuto('preparazione')" data-section="preparation">Preparation</a></li>
                <li><a  onclick="caricaContenuto('tips')" data-section="tipsTricks">Tips & Tricks</a></li>
            </ul>

        </div>

        <div id="recipe-content">
            <table id="ingredienti"> </table>
        </div>

    </section>
    <section id="reviews-section">
        <div class="reviews-title">
            <h2>Recensioni</h2>
        </div>
        <div id="reviews-container">
            <div class="review">
                <strong>Mario Rossi</strong>
                <p>La pizza era incredibile, croccante fuori e morbida dentro, condita perfettamente!</p>
            </div>
            <div class="review">
                <strong>Luca Bianchi</strong>
                <p>Una delle migliori pizze che abbia mai mangiato. Il servizio è stato eccellente.</p>
            </div>
            <div class="review">
                <strong>Giulia Verdi</strong>
                <p>La varietà delle pizze è fantastica, e ogni volta è un piacere scoprirne di nuove. Super consigliato!</p>
            </div>
        </div>
        <form id="review-form">
            <strong style="display: flex; align-items: center">
                <i class="fa-solid fa-circle-user"></i>
                NOME DA DATABASE
            </strong>
            <textarea id="review-content" placeholder="La tua recensione" required></textarea>
            <div class="invio-recensione">
                <button type="submit">Invia Recensione</button>
            </div>
        </form>

    </section>



</main>

<?php
include('../structure/footer/footer.html');
?>

<script src="detailsjs.js"></script>

</body>

</html>