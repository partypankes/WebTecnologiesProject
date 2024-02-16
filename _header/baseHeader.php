<link rel="stylesheet" href="/gruppo10/_header/css/styleHeader.css">
<link rel="stylesheet" href="/gruppo10/_header/css/baseHeader.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">


<!--Header Altro-->
<header>
    <nav id="nav-container">

        <div class="navbar">
            <a class="logo" href="../home/home_page.php">SapurEat</a>

            <ul class="menu">
                <li><a href="/gruppo10/ricerca_ricette/ricette.php">Ricette</a></li>
                <li><a href="/gruppo10/aboutUs/aboutUs.php">AboutUs</a></li>
            </ul>
            <!--Lato Utente-->
            <div class="r-side">
                <?php
                include('../_header/user-side.php');
                ?>
                <i id="menu-icon" class="fa-solid fa-bars"></i>
            </div>
        </div>

    </nav>
</header>
<div class="h-header"></div>

<script>
    let menu = document.querySelector('#menu-icon');
    let categories = document.querySelector('.menu');

    menu.onclick = ()=> {
        categories.classList.toggle('open');
        if (categories.classList.contains('open')) {
            menu.classList = 'fa-solid fa-xmark';
        } else {
            menu.classList = 'fa-solid fa-bars';
        }
    }
</script>