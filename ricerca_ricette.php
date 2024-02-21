<?php
require 'core/auth.php'
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ricette - SapurEat</title>
    <link rel="icon" type="image/x-icon" href="resources/favicon.ico">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/css/ricerca_ricette.css">
    <link rel="stylesheet" href="assets/css/card_ricette.css">
    <link rel="stylesheet" href="assets/css/controlli_paginazione.css">


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


            <div class="filter-container">

            <div class="filter-box">
                <div class="filter-question" onclick="toggleFilter('filter-course')">
                    <h3>Ricette per portata</h3>
                    <span class="filter-toggle">&#x25BC;</span>
                </div>
                <div class="filter-answer" id="filter-course">
                    <label><input type="radio" name="portata" value="antipasto" onclick="richiedi_pagina(1)">Antipasto</label>
                    <label><input type="radio" name="portata" value="primoPiatto" onclick="richiedi_pagina(1)">Primo Piatto</label>
                    <label><input type="radio" name="portata" value="secondoPiatto" onclick="richiedi_pagina(1)">Secondo Piatto</label>
                    <label><input type="radio" name="portata" value="piattoUnico" onclick="richiedi_pagina(1)">Piatto Unico</label>
                    <label><input type="radio" name="portata" value="dessert" onclick="richiedi_pagina(1)">Dessert</label>
                    <label><input type="radio" name="portata" value="bevande" onclick="richiedi_pagina(1)">Bevande</label>
                    <label><input type="radio" name="portata" value="" onclick="richiedi_pagina(1)">Qualsiasi</label>
                </div>
            </div>

            <div class="filter-box">
                <div class="filter-question" onclick="toggleFilter('filter-time')">
                    <h3>Ricette per tempo</h3>
                    <span class="filter-toggle">&#x25BC;</span>
                </div>
                <div class="filter-answer" id="filter-time">
                    <label><input type="radio" name="tempo" value="15" onclick="richiedi_pagina(1)"><= 15 min</label>
                    <label><input type="radio" name="tempo" value="30" onclick="richiedi_pagina(1)"><= 30 min</label>
                    <label><input type="radio" name="tempo" value="10000" onclick="richiedi_pagina(1)">Qualsiasi</label>
                </div>
            </div>

        </div>

    </section>



    <section id="sezione-ricette" class="sezione-ricette">


    </section>

</main>

    <?php
        include('structure/footer.html');
    ?>

<script src="assets/js/ricerca_ricetta/ricerca_ricette_funzioni.js"></script>

</body>
</html>
