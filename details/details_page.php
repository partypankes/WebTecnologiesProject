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
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="/details/details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>




<body>
<?php
include('../_header/baseHeader.php');
?>

<main>
    <section class="first-view">

        <section id="title">
            <div class="text"><?php name_and_user($_GET['id'])?></div>
            <div class="photo">
                <img src="<?php echo immagine_banner($_GET['id'])?>" alt="Banner Ricetta">
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

    </section>





    <section id="reviews-section">
        <div class="reviews-title">
            <h2>Recensioni</h2>
        </div>
        <div id="reviews-container">
            <?php carica_recensione($_GET['id'])?>
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
        <?php if ($_SESSION['loggedin']) {

            echo '<form method = "post" id = "review-form" >
            <strong style = "display: flex; align-items: center" >
                <i class="fa-solid fa-circle-user" ></i >';
                    echo $_SESSION['username'];
            echo '</strong >
            <div id = "recensione" >
                <textarea id = "review-content" name = "descrizione-recensione" placeholder = "La tua recensione" required ></textarea >
                <div id = "div-voto-recensione" >
                    <label for="voto-recensione" > Voto:</label >
                    <select id = "voto-recensione" name = "voto-recensione" onchange = "nascondiOpzioneIniziale()" >
                        <option value = "" disabled selected > Voto</option >
                        <option value = "1" > 1 / 5</option >
                        <option value = "2" > 2 / 5</option >
                        <option value = "3" > 3 / 5</option >
                        <option value = "4" > 4 / 5</option >
                        <option value = "5" > 5 / 5</option >
                    </select >
                </div >
            </div >

            <div class="invio-recensione" >
                <button type = "submit" > Invia Recensione </button >
            </div >
        </form >';
        }
       ?>

    </section>



</main>

<?php
include('../structure/footer/footer.html');
?>

<script src="detailsjs.js"></script>
<script src="ajax_invio_recensione.js"></script>

</body>

</html>