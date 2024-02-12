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
</head>

<?php
//da poter cambiare nel caso l'utente sia registrato o meno
include('../_header/baseHeader.php');
?>


<body>
<main>
    <section id="title">
        <div class="text"><?php name_and_user(3)?>
        </div>
        <div class="photo">
            <img src="<?php echo immagine_banner(3)?>" alt="Homemade Pizza">
        </div>
    </section>


    <section id="details">
        <div id="contents">
            <ul>
                <li><a  onclick="caricaContenuto('ingredienti')" data-section="ingredients">Ingredients</a></li>
                <li><a  onclick="caricaContenuto('preparazione')" data-section="preparation">Preparation</a></li>
                <li><a  onclick="caricaContenuto('serving')" data-section="servingSuggestions">Serving Suggestions</a></li>
                <li><a  onclick="caricaContenuto('tips')" data-section="tipsTricks">Tips & Tricks</a></li>
            </ul>

        </div>

        <div id="recipe-content">
            <table id="ingredienti"> </table>
        </div>

    </section>

<!--
    <section id="gallery">
        <div class="textGallery">
            <h2>Recipe Gallery</h2>
            <p>Browse through user-uploaded images of recipe variations</p>
        </div>
        <div id="carousel" class="carousel">
            <div class="carousel-slide"><img src="image1.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="image2.jpg" alt="Image 2"></div>
            <div class="carousel-slide"><img src="image3.jpg" alt="Image 3"></div>
            <div class="carousel-slide"><img src="image4.jpg" alt="Image 1"></div>
            <div class="carousel-slide"><img src="image5.jpg" alt="Image 2"></div>
            <div class="carousel-slide"><img src="image6.jpg" alt="Image 3"></div>
        </div>
        <button id="prev" class="control">&#10094;</button>
        <button id="next" class="control">&#10095;</button>

    </section>

  -->

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
            <strong>NOME DA DATABASE</strong>
            <textarea id="review-content" placeholder="La tua recensione" required></textarea>
            <div class="invio-recensione">
                <button type="submit">Invia Recensione</button>
            </div>

        </form>
    </section>



</main>

<?php include ('../footer/footer.html'); ?>

<script src="detailsjs.js"></script>

</body>

</html>