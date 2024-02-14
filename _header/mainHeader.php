<link rel="stylesheet" href="/_header/css/styleHeader.css">
<link rel="stylesheet" href="/_header/css/mainHeader.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

<!--Header HomePage-->
<header>
    <nav id="nav-container">
        <!--Background dietro navbar-->
        <div class="navbar-bg"></div>
        <div class="navbar">
            <a class="logo" href="#home">SapurEat</a>

            <ul class="menu">
                <li><a href="/ricerca_ricette/ricette.php">Ricette</a></li>
                <li><a href="/aboutUs/aboutUs.php">AboutUs</a></li>
            </ul>
            <!--Lato Utente-->
            <div class="r-side">

                    <?php
                    if($_SESSION['loggedin']){
                        echo '<div class="user">
                    <a href="#logout">
                        <i id="logout-icon" class="fa-solid fa-right-from-bracket"></i>
                    </a><a href="../login/login_page.php">' . $_SESSION['username'] . '</a></div>';
                    }else{
                        echo '<a class="user" href="../login/login_page.php"><i class="fa-solid fa-circle-user"></i>Accedi</a>';
                    }
                    ?>

                <i id="menu-icon" class="fa-solid fa-bars"></i>
            </div>
        </div>

    </nav>
</header>

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

    document.addEventListener('DOMContentLoaded', function () {
        const navbarContainer = document.getElementById('nav-container');
        const navbarbg = navbarContainer.querySelector('.navbar-bg');

        document.addEventListener('scroll', function () {
            const scrollPosition = window.scrollY;
            const triggerPosition = window.innerHeight / 3.5;

            // Controlla se la posizione di scroll supera la soglia e aggiorna la trasformazione di conseguenza
            if (scrollPosition > triggerPosition) {
                // Fa scendere il .navbar-bg
                navbarbg.style.transform = 'translateY(0)';
                navbarbg.style.backgroundColor = 'black'; // Assicurati che lo sfondo sia nero
            } else {
                // Nasconde il .navbar-bg al di sopra della vista
                navbarbg.style.transform = 'translateY(-100%)';
            }
        });
    });
</script>


