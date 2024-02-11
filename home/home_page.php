<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SapurEat - Homepage</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="../home/home.css">
</head>
<body>

        <?php
        include('../_header/mainHeader.html');
        ?>


    <main>
        <section class="banner-logged">
            <?php
            //da visualizzare se è il primo acceso dell'utente non registrato o non è registrato
            include('../home/banner_home/banner_home.html');
            ?>
        </section>
        <section class="ricette-home">
            <div class="ricette">Sient</div>
        </section>


    </main>

    <?php
        include('../footer/footer.html');
    ?>
    

</body>
</html>