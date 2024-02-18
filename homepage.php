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
                    <h2>Le 5 migliori ricette SapurEat</h2>
                    <div class="sezione-ricette">
                        <?php if (isset($_SESSION['loggedin'])){
                            include 'core/ricette_homepage.php';
                        } ?>
                </div>


                <div class="best-ricette">
                    <h2>I 5 migliori Primi Piatti SapurEat</h2>
                    <div class="sezione-ricette">
                        <?php if (isset($_SESSION['loggedin'])){
                            include 'core/ricette_homepage.php';
                        } ?>
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