<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SapurEat - Homepage</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <?php
        //tipologia header differente per utente registato e per non registrato
        include('../_header/nonRegistratoHeader.html');
        ?>
    </header>
    
    <main>
        <?php
            //da visualizzare se è il primo acceso dell'utente non registrato o non è registrato
            include('../home/banner_home/banner_home.html');
        ?>
    </main>

    <?php
        //tipologia header differente per utente registato e per non registrato
        include('../footer/footer.html');
    ?>
    
    
    

</body>
</html>