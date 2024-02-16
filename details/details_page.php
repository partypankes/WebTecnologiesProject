<?php include 'query_function.php';
require '../auth/auth.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Ricetta</title>
    <meta name="description" content="A delicious and easy homemade pizza recipe by John Doe">
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="/details/details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>

<body>
<div class="backdrop"></div>

<?php
include('../_header/baseHeader.php');
?>


<main>

    <section id="title">
        <div class="text"><?php name_and_user($_GET['id'])?></div>
        <div class="photo">
            <img src="<?php echo immagine_banner($_GET['id'])?>" alt="Banner Ricetta">
        </div>
    </section>

    <section id="details">
        <div id="contents">
            <ul>
                <li onclick="caricaContenuto('ingredienti')" data-section="ingredients"><a>Ingredienti</a></li>
                <li onclick="caricaContenuto('preparazione')" data-section="preparation"><a>Preparazione</a></li>
                <li onclick="caricaContenuto('tips')" data-section="tipsTricks"><a>Consigli</a></li>
            </ul>
        </div>

        <div id="recipe-content">
            <table id="ingredienti"> </table>
        </div>

    </section>

    <section id="reviews-section">
        <div class="reviews-title">
            <h1>Recensioni</h1>
        </div>

        <div id="reviews-container">
            <?php carica_recensione($_GET['id'])?>
        </div>

        <?php if ($_SESSION['loggedin']) {

            echo '<form method = "post" id = "review-form" >
            <strong>
                <i class="fa-solid fa-circle-user" ></i >';
                    echo $_SESSION['username'];
            echo '</strong >
            <div id = "recensione" >
                <textarea id = "review-content" name = "descrizione-recensione" placeholder = "La tua recensione" required maxlength="255"></textarea >
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
</hero>
<script src="/details/detailsjs.js"></script>
<script src="/details/ajax_invio_recensione.js"></script>

</body>

</html>