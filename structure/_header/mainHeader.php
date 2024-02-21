<link rel="stylesheet" href="assets/css/_header/styleHeader.css">
<link rel="stylesheet" href="assets/css/_header/mainHeader.css">

<!--Header HomePage-->
<header>
    <nav id="nav-container">
        <!--Background dietro navbar-->
        <div class="navbar-bg"></div>

        <div class="navbar">
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

        </div>

    </nav>
</header>

<script src="assets/js/_header/mainHeader_scroll.js"></script>
<script src="assets/js/_header/header_icon_menu.js"></script>


