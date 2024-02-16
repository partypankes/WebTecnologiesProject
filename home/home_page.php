<?php
require('../auth/auth.php');
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SapurEat - Homepage</title>
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="/home/home.css">

    <script src="showSectionForUser.js"></script>
</head>
<body>
<div class="backdrop"></div>

    <?php
        include('../_header/mainHeader.php');
    ?>

    <section class="intro">
        <?php
            if(isset($_SESSION['loggedin'])){
                include('../home/logged_banner_home/banner_home_logged.php');
            }else{
                include('../home/banner_home/banner_home.php');
            }
        ?>
    </section>

    <main id="home-main">
      
        <section class="ricette-home">

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

    </main>

    <?php
        include('../structure/footer/footer.html');
    ?>
    
<script>
    let status = "<?php
        echo $_SESSION['loggedin'];
        ?>";

    showSection(status);
</script>
<script src="search_bar_home.js"></script>
</body>
</html>