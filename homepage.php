<?php
    require('core/auth.php');
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - SapurEat</title>
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/css/homepage.css">
    <link rel="stylesheet" href="assets/css/banners_home.css">
    <link rel="stylesheet" href="assets/css/ycard.css">

    <script src="assets/js/homepage/showSectionForUser.js"></script>
</head>
<body>
<div class="backdrop"></div>
    <?php
        include('structure/_header/mainHeader.php');
    ?>

    <?php
        include('structure/banners_home.php');
    ?>

    <main id="main-home">
        <section class="home">
            <section id="logged-home">
                <div class="best-ricette">
                    <h2>Le migliori ricette SapurEat</h2>
                    <div class="sezione-ricette">

                        <div class="ycard">
                            <div class="y-banner">
                                <img class="banner-ycard" src="resources/img/IMG2.jpg"/>
                                <p id="user-ycard">by <span>gilvestro_03aaaa</span></p>
                            </div>

                            <div class="info-ycard">
                                <a href="dettagli_ricetta.php?id='. $row['id'] . '">PlumcakesaaaaaasasasfaadPlumca</a>
                                <div class="extra-ycard">
                                    <p><span id="minutes">15</span>'<i class="fa-regular fa-clock"></i></p>
                                    <p><span id="voto">4</span>/5<i class="fa-solid fa-star"></i></p>
                                </div>

                            </div>
                        </div>
                        <div class="ycard">
                            <div class="y-banner">
                                <img class="banner-ycard" src="resources/img/IMG1.jpg"/>
                                <p id="user-ycard">by <span>gilvestro_03aaaa</span></p>
                            </div>

                            <div class="info-ycard">
                                <a href="dettagli_ricetta.php?id='. $row['id'] . '">PlumcakesaaaaaasaPlumcakesaaaaaasasasfaadpp</a>
                                <div class="extra-ycard">
                                    <p><span id="minutes">15</span>'<i class="fa-regular fa-clock"></i></p>
                                    <p><span id="voto">4</span>/5<i class="fa-solid fa-star"></i></p>
                                </div>

                            </div>
                        </div>

                        <div class="ycard">
                            <div class="y-banner">
                                <img class="banner-ycard" src="resources/img/IMG5.jpg"/>
                                <p id="user-ycard">by <span>gilvestro_03aaaa</span></p>
                            </div>

                            <div class="info-ycard">
                                <a href="dettagli_ricetta.php?id='. $row['id'] . '">PlumcakesaaaaaasasasfaadPlumcakesaasasasfaadpp</a>
                                <div class="extra-ycard">
                                    <p><span id="minutes">15</span>'<i class="fa-regular fa-clock"></i></p>
                                    <p><span id="voto">4</span>/5<i class="fa-solid fa-star"></i></p>
                                </div>

                            </div>
                        </div><div class="ycard">
                            <div class="y-banner">
                                <img class="banner-ycard" src="resources/img/IMG4.jpg"/>
                                <p id="user-ycard">by <span>gilvestro_03aaaa</span></p>
                            </div>

                            <div class="info-ycard">
                                <a href="dettagli_ricetta.php?id='. $row['id'] . '">PlumcakesaaaaaasasasfaadPlumcakesaaaaaasasasfaadpp</a>
                                <div class="extra-ycard">
                                    <p><span id="minutes">15</span>'<i class="fa-regular fa-clock"></i></p>
                                    <p><span id="voto">4</span>/5<i class="fa-solid fa-star"></i></p>
                                </div>

                            </div>
                        </div><div class="ycard">
                            <div class="y-banner">
                                <img class="banner-ycard" src="resources/img/IMG3.jpg"/>
                                <p id="user-ycard">by <span>gilvestro_03aaaa</span></p>
                            </div>

                            <div class="info-ycard">
                                <a href="dettagli_ricetta.php?id='. $row['id'] . '">Plumcakesaaaaaasasasumcakesaaaaaasasasfaadpp</a>
                                <div class="extra-ycard">
                                    <p><span id="minutes">15</span>'<i class="fa-regular fa-clock"></i></p>
                                    <p><span id="voto">4</span>/5<i class="fa-solid fa-star"></i></p>
                                </div>

                            </div>

                    </div>




                </div>

                <div class="nuove-ricette">

                    <div id="ricette-btn-altro">
                        <button><span>Scopri altre ricette</span></button>
                    </div>
                    <div class="ricette-title">
                        <p id="ricette-top">Scopri qui le nuove e deliziose ricette</p>
                        <p id="ricette-sub">Esplora una varietà di ricette per piatto e preferenze.</p>
                    </div>

                    <div class="table-ricette">

                    </div>
                </div>
            </section>
        </section>
    </main>

    <?php
        include('structure/footer.html');
    ?>


    <script src="assets/js/homepage/search_bar_home.js"></script>

</body>
</html>