<link rel="stylesheet" href="/global.css">
<link rel="stylesheet" href="/_header/css/styleHeader.css">
<link rel="stylesheet" href="/_header/css/baseHeader.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">


<!--Header Altro-->
<header>
    <nav id="nav-container">

        <div class="navbar">
            <a class="logo" href="../home/home_page.php">SapurEat</a>

            <ul class="menu">
                <li><a href="#ricette">Ricette</a></li>
                <li><a href="#about_us">AboutUs</a></li>
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
</script>