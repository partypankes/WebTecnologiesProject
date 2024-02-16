<link rel="stylesheet" href="assets/css/_header/styleHeader.css">
<link rel="stylesheet" href="assets/css/_header/baseHeader.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">


<!--Header Altro-->
<header>
    <nav id="nav-container">

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
<div class="h-header"></div>

<script src="assets/js/_header/header_icon_menu.js"></script>