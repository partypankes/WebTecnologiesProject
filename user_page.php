<?php
    require 'core/auth.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>User Page - SapurEat</title>
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/css/user_page.css">
    <link rel="stylesheet" href="assets/css/xcard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="assets/js/user_page/user_page_script.js"></script>
    <script src="assets/js/user_page/ajax_ricette.js"></script>
</head>
<body>

<div class="backdrop"></div>

    <?php
        include('structure/_header/baseHeader.php');
    ?>

<main>
    <section class="container">
        <div class="sidebar">
            <a><i class="fas fa-user-edit"></i> Account</a>
            <a><i class="fas fa-blog"></i> Post</a>
            <a onclick="ajax_ricette()"><i class="fas fa-headset"></i> Assistenza</a>
            <a><i class="fas fa-star"></i> Recensioni</a>
            <a><i class="fas fa-utensils"></i> Crea un piatto</a>

            <div class="logout">
                <button class="logout-btn" type="submit"><i class="fas fa-sign-out-alt"></i>Logout</button>
            </div>
        </div>

        <div class="content">

            <section id="account" class="section_show">
                <h2>Informazioni personali</h2>

                <div class="anagrafica">
                    <div id="content-anagrafica">
                        <!--Caricamento Asincrono!-->
                        <?php include 'core/user_page/fetch_dati_utente.php';?>
                    </div>

                    <div class="modifica">
                        <button class="modifica-btn" onclick="showFormAnagrafica()" type="button">Modifica</button>
                    </div>
                </div>

                <form id="anagrafica">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="nome" placeholder="Nome">

                    <label for="surname">Cognome</label>
                    <input type="text" id="surname" name="cognome" placeholder="Cognome">

                    <label for="birthdate">Data di nascita</label>
                    <input type="date" id="birthdate" name="data_di_nascita" placeholder="14/02/2003">

                    <label for="gender">Sesso</label>
                    <div class="gender_div">
                        <input type="radio" id="male" name="sesso" value="M">
                        <label for="male">M</label>
                        <input type="radio" id="female" name="sesso" value="F">
                        <label for="female">F</label>
                        <input type="radio" id="other" name="sesso" value="O">
                        <label for="other">O</label>
                    </div>

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="E-mail">

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password">

                    <label for="new-password">Nuova password</label>
                    <input type="password" id="new-password" name="new_password" placeholder="Nuova password">


                    <div class="conferma">
                        <button   id="conferma-anagrafica" class="conferma-btn" type="submit">Conferma</button>
                    </div>
                </form>
            </section>


            <section id="post" class="section_show" style="display:none;">
                <h2>I miei post</h2>
                <div class="post">
                    <div id="post-section">

                    </div>
                </div>
            </section>

            <section id="assistenza" class="section_show" style="display:none;">
                <?php include('structure/faqs.html'); ?>
            </section>

            <section id="reviews" class="section_show" style="display:none;">
                <h2>Le mie recensioni</h2>
                <p>Qui puoi visualizzare ed eliminare le tue recensioni.</p>
            </section>

            <section id="crea_piatto" class="section_show" style="display:none;">

                <?php include('structure/inserimento_ricetta.php');?>

            </section>
        </div>

    </section>

</main>



</body>
</html>