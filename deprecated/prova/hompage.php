<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SapurEat</title>
    <link rel="stylesheet" href="../../global.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>

<?php
//da poter cambiare nel caso l'utente sia registrato o meno
include('../_header/nonRegistratoHeader.html');
?>
<main>
    <section id="first">
        <div class="box">
            <input type="text" placeholder="Trova la tua ispirazione...">
            <button type="submit" aria-label="Cerca"><i class="fas fa-search"></i></button>
        </div>
    </section>
</main>

<footer>
    <?php
    include('../footer/footer.html');
    ?>
</footer>


<script src="script.js"></script>
</body>
</html>
