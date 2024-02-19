<?php
    require('core/auth.php');
    include 'core/ricette_homepage.php'
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - SapurEat</title>
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/css/card_ricette.css">
    <link rel="stylesheet" href="assets/css/banners_home.css">
    <link rel="stylesheet" href="assets/css/homepage.css">



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

            <div class="best-ricette">
                <h2>Le 5 migliori ricette SapurEat</h2>
                <div class="sezione-ricette">
                    <?php
                        top5();
                    ?>
                </div>
            </div>

            <section id="logged-home">



                <div class="best-ricette even-div">
                    <h2>I 5 migliori Primi Piatti SapurEat</h2>
                    <div class="sezione-ricette">
                        <?php if (isset($_SESSION['loggedin'])){
                            primi_piatti();
                        } ?>
                    </div>
                </div>
                <div class="best-ricette odd-div">
                    <h2>I 5 migliori Secondi Piatti SapurEat</h2>
                    <div class="sezione-ricette">
                        <?php if (isset($_SESSION['loggedin'])){
                            secondi_piatti();
                        } ?>
                    </div>
                </div>

                <div class="best-ricette even-div">
                    <h2>I 5 migliori Dessert SapurEat</h2>
                    <div class="sezione-ricette">
                        <?php if (isset($_SESSION['loggedin'])){
                                dessert();
                        } ?>
                    </div>
                </div>
                <div class="best-ricette odd-div">
                    <h2>Le 5 ricette più veloci SapurEat</h2>
                    <div class="sezione-ricette">
                        <?php if (isset($_SESSION['loggedin'])){
                                veloci();
                        } ?>
                    </div>
                </div>

            </section>

            <div id="discover-1" class="discover-home">

                <div class="discover-img"></div>

                <div class="discover">
                    <div class="discover-content">
                        <p class="discover-title">Sei Ispirato e vuoi Ispirare?</p>
                        <p class="discover-sub">Già cuoco nella tua cucina? Porta le tue ricette su SapurEat e lascia che tutti si delizino con le tue creazioni!</p>
                    </div>
                    <button id="login-discover-btn">Entra nella community!</button>
                </div>

            </div>


        </section>
    </main>

    <?php
        include('structure/footer.html');
    ?>


    <script src="assets/js/homepage/search_bar_home.js"></script>

</body>
</html>