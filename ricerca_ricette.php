<?php
require 'core/auth.php'
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricette - SapurEat</title>
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/css/ricerca_ricette.css">
    <link rel="stylesheet" href="assets/css/xcard.css">

</head>
<body>
<div class="backdrop"></div>

    <?php
        include('structure/_header/baseHeader.php');
    ?>

<main>

    <section class="ricerca-ricetta">
        <div id="search-bar">
            <?php
            include('structure/search-bar.php')
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

    <section id="sezione-ricette" class="sezione-ricette">
            <?php include 'core/ricerca_ricette/inizializzazione_pagina.php' ?>
    </section>
</main>

    <?php
        include('structure/footer.html');
    ?>

    <script src="assets/js/faqs_script.js"></script>
    <script src="assets/js/ricerca_ricette_submitFilters.js"></script>
</body>
</html>
