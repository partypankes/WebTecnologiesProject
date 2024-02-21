<link rel="stylesheet" href="assets/css/_header/styleHeader.css">
<link rel="stylesheet" href="assets/css/_header/baseHeader.css">

<!--Header Altro-->
<header>
    <nav id="nav-container">

            <a class="logo" href="homepage.php">SapurEat</a>

            <ul class="menu">
                <li><a href="ricerca_ricette.php">Ricette</a></li>
                <li><a href="aboutUs.php">AboutUs</a></li>
            </ul>
            <!--Lato Utente-->
            <div class="r-side">
                <?php
                    include('user-side.php');
                ?>
                <i id="menu-icon" class="fa-solid fa-bars"></i>
            </div>

    </nav>
</header>
<div class="h-header"></div>

<script src="assets/js/_header/header_icon_menu.js"></script>