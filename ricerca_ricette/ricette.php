<?php
require '../auth/auth.php'
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SapurEat - Homepage</title>
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="/ricerca_ricette/ricette.css">
</head>
<body>

<?php
include('../_header/baseHeader.php');
?>

<main>

    <section class="ricerca-ricetta">
        <div id="search-bar">
            <?php
            include('../home/banner_home/search-bar.html')
            ?>
        </div>
        <div class="filters">

            <div class="box-filtro">
                <div class="domanda-faq">
                    <h3>Ricette per portata</h3>
                    <span class="faq-toggle">&#5167;</span>
                </div>
                <div class="risposta-faq" id="faq1">
                    <label><input class="filtro" type="radio" onclick="submitFilter()" name="portata" value="antipasto">Antipasto</label>
                    <label><input class="filtro" type="radio" onclick="submitFilter()" name="portata" value="primoPiatto">Primo Piatto</label>
                    <label><input class="filtro" type="radio" onclick="submitFilter()" name="portata" value="secondoPiatto">Secondo Piatto</label>
                    <label><input class="filtro" type="radio" onclick="submitFilter()" name="portata" value="dessert" >Dessert</label>
                    <label><input class="filtro" type="radio" onclick="submitFilter()" name="portata" value="brunch" >Brunch</label>
                </div>
            </div>

            <div class="box-filtro">
                <div class="domanda-faq">
                    <h3>Ricette per tempo</h3>
                    <span class="faq-toggle">&#5167;</span>
                </div>
                <div class="risposta-faq" id="faq1">
                    <label><input class="filtro" type="radio" onclick="submitFilter()" name="tempo" value="15">< 15 min></label>
                    <label><input class="filtro" type="radio" onclick="submitFilter()" name="tempo" value="30">< 30 min</label>

                </div>
            </div>

        </div>

    </section>

</main>

<?php
include('../footer/footer.html');
?>

    <script src="../faqs/script_faqs.js"></script>
    <script src="../ricerca_ricette/submitFilters.js"></script>
</body>
</html>
