<?php
require '../auth/auth.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Pagina Utente</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="../pagina_utente/utente_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<div class="backdrop"></div>

<?php
include('../_header/baseHeader.php');
?>

<main>
    <section class="container">
        <div class="sidebar">
            <a><i class="fas fa-user-edit"></i> Account</a>
            <a><i class="fas fa-ticket-alt"></i> Post</a>
            <a><i class="fas fa-headset"></i> Assistenza</a>
            <a><i class="fas fa-star"></i> Recensioni</a>
            <a><i class="fas fa-star"></i> Crea un piatto</a>

            <div class="logout">
                <button class="logout-btn" type="submit"><i class="fas fa-sign-out-alt"></i>Logout</button>
            </div>
        </div>

        <div class="content">

            <div id="account" class="section_show">
                <h2>Informazioni personali</h2>
                <form id="anagrafica">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" placeholder="Nome">

                    <label for="surname">Cognome</label>
                    <input type="text" id="surname" name="surname" placeholder="Cognome">

                    <label for="birthdate">Data di nascita</label>
                    <input type="date" id="birthdate" name="birthdate" placeholder="14/02/2003">

                    <label for="gender">Sesso</label>
                    <div class="gender_div">
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Uomo</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Donna</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Altro</label>
                    </div>

                    <div class="confirm">
                        <button class="confirm-btn" type="submit">Confirm</button>
                    </div>
                </form>
                <form>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="E-mail">

                    <div class="confirm">
                        <button class="confirm-btn" type="submit">Confirm</button>
                    </div>
                </form>
                <form>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password">

                    <label for="new-password">Nuova password</label>
                    <input type="password" id="new-password" name="new_password" placeholder="Nuova password">


                    <div class="confirm">
                        <button class="confirm-btn" type="submit">Confirm</button>
                    </div>
                </form>
            </div>


            <div id="post" class="section_show" style="display:none;">
                <h2>I miei post</h2>
                <p>VISUALIZZARE I POST CAROSELLO????</p>
            </div>

            <div id="assistenza" class="section_show" style="display:none;">
                <?php include('../structure/faqs/faqs.html'); ?>
            </div>

            <div id="reviews" class="section_show" style="display:none;">
                <h2>Le mie recensioni</h2>
                <p>Qui puoi visualizzare ed eliminare le tue recensioni.</p>
            </div>

            <div id="crea piatto" class="section_show" style="display:none;">
                <h2>Crea un piatto</h2>
                <p>Qui puoi visualizzare ed eliminare le tue recensioni.</p>
            </div>
        </div>

    </section>

</main>

<script src="/pagina_utente/utente_script.js"></script>

</body>
</html>