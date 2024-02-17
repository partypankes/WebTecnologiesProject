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

    <script src="assets/js/homepage/showSectionForUser.js"></script>
</head>
<body>


    <?php
        include('structure/_header/mainHeader.php');
    ?>

    <div class="backdrop"></div>

    <section class="intro">
        <?php
            include('structure/banners_home.php');
        ?>
    </section>

    <main id="main-home">
        <div id="logged-home">
            <section class="best-ricette">
                <h2>Le migliori ricette SapurEat</h2>
            </section>

            <section class="nuove-ricette">

                <div id="ricette-btn-altro">
                    <button><span>Scopri altre ricette</span></button>
                </div>
                <div class="ricette-title">
                    <p id="ricette-top">Scopri qui le nuove e deliziose ricette</p>
                    <p id="ricette-sub">Esplora una varietà di ricette per piatto e preferenze.</p>
                </div>

                <div class="table-ricette">

                </div>
            </section>
        </div>

        <div id="home-condivisa">

        </div>
    </main>
    <?php
    include('structure/prova_carosello_recensioni/carosello.html')
    ?>
    <?php
        include('structure/footer.html');
    ?>
    
    <script>

    </script>
    <script src="assets/js/homepage/search_bar_home.js"></script>

</body>
</html>