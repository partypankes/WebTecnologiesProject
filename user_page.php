<?php
    require 'core/auth.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>User Page - SapurEat</title>
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/css/card_ricette.css">
    <link rel="stylesheet" href="assets/css/user_page/user_page.css">
    <link rel="stylesheet" href="assets/css/user_page/user_page_2.css">
    <link rel="stylesheet" href="assets/css/controlli_paginazione.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="assets/js/user_page/user_page_script.js"></script>
    <script src="assets/js/user_page/funzioni_ajax.js"></script>
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
            <a onclick="richiedi_post_utente(1)"><i class="fas fa-blog"></i> Post</a>
            <a ><i class="fas fa-headset"></i> Assistenza</a>
            <a onclick="richiedi_recensione_utente(1)"><i class="fas fa-star"></i> Recensioni</a>
            <a><i class="fas fa-utensils"></i> Crea un piatto</a>

            <div class="logout">
                <button class="logout-btn" onclick="logout()"><i class="fas fa-sign-out-alt"></i>Logout</button>
            </div>
        </div>

        <div class="content">

            <section id="account" class="section_show">

                <div class="anagrafica">
                    <h2>Informazioni personali</h2>
                    <div id="content-anagrafica">
                        <!--Caricamento Asincrono!-->
                        <?php include 'core/user_page/fetch_dati_utente.php';?>


                    </div>

                    <div class="modifica">
                        <button class="modifica-btn" onclick="showFormAnagrafica()" type="button">Modifica</button>
                    </div>

                </div>

                <form id="anagrafica">

                    <div class="title">
                        <h1>Modifica i tuoi dati personali</h1>
                    </div>
                    <p id="errorMessage_signup"></p>
                    <div class="form-section1">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="nome" placeholder="Nome">
                    </div>

                    <div class="form-section1">
                        <label for="surname">Cognome</label>
                        <input type="text" id="surname" name="cognome" placeholder="Cognome">
                    </div>

                    <div class="form-section1">
                        <label for="birthdate">Data di nascita</label>
                        <input type="date" id="birthdate" name="data_di_nascita" placeholder="14/02/2003">
                    </div>

                    <div class="form-section1">
                        <label for="gender">Sesso</label>
                        <div class="gender_div">
                            <input type="radio" id="male" name="sesso" value="M">
                            <label for="male">Uomo</label>
                            <input type="radio" id="female" name="sesso" value="F">
                            <label for="female">Donna</label>
                            <input type="radio" id="other" name="sesso" value="O">
                            <label for="other">Altro</label>
                        </div>
                    </div>


                    <div class="form-section1">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="E-mail">
                    </div>


                    <div class="form-section1">
                        <label for="password">Nuova Password</label>
                        <input type="password" id="password" name="password" placeholder="Password">
                        <label for="password_signup" id="intro_requisiti">La password deve avere:</label>
                        <div class="info_password" id="info_password">
                            <ul>
                                <li id="lunghezza">Una lunghezza compresa tra 8 e 20 caratteri</li>
                                <li id="maiuscola">Almeno una lettera maiuscola</li>
                                <li id="minuscola">Almeno una lettera minuscola</li>
                                <li id="numero">Almeno un numero</li>
                                <li id="carspeciale">Almeno un carattere speciale</li>
                            </ul>
                        </div>
                    </div>


                    <div class="form-section1">
                        <label for="new-password">Conferma password</label>
                        <input type="password" id="new-password" name="new_password" placeholder="Nuova password">
                    </div>



                    <div class="conferma">
                        <button   id="conferma-anagrafica" class="conferma-btn" type="submit">Conferma</button>
                    </div>
                </form>
            </section>


            <section id="post" class="section_show" style="display:none;">

                <div class="post">
                    <h2>I miei post</h2>
                    <div id="post-section">

                    </div>
                </div>
            </section>

            <section id="assistenza" class="section_show" style="display:none;">
                <div class="assistenza">
                    <h2>Assistenza</h2>
                    <div class="assistenza-contenuti">

                        <?php include('structure/faqs.html'); ?>
                    </div>
                </div>

            </section>

            <section id="reviews" class="section_show" style="display:none;">
                <div class="reviews">
                    <h2>Le mie reviews</h2>
                    <div id="utente-reviews">

                    </div>
                </div>
            </section>

            <section id="crea_piatto" class="section_show" style="display:none;">

                <?php include('structure/inserimento_ricetta.php');?>

            </section>
        </div>


    </section>

</main>

<script src="assets/js/user_page/controlli_anagrafica.js"></script>

</body>
</html>