<?php
    include('../auth/auth.php')
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Inserisci Ricetta</title>
    <link rel="stylesheet" href="/global.css">
    <link rel="stylesheet" href="/inserimento_ricetta/inserimento_ricetta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>

<?php
    include('../_header/baseHeader.php')
?>
<main>
    <section id="container">
        <div class="title">
            <h1>Inserisci La Tua Ricetta</h1>
        </div>

        <form id="ricetta-form" action="inserimento_ricetta.php" method="post" enctype="multipart/form-data">
            <div class="form-section">
                <label for="titoloRicetta">Titolo Ricetta:</label>
                <input type="text" id="titoloRicetta" name="titoloRicetta" maxlength="50">
            </div>

            <div class="form-section" >
                <label for="descrizioneRicetta">Descrizione:</label>
                <textarea id="descrizioneRicetta" name="descrizioneRicetta" maxlength="800"></textarea>
            </div>


                <div class="form-section" id="banner">
                    <div id="mini-container">
                        <div id="intra-mc">
                            <!--
                            <label for="immagine_banner"></label>
                            !-->
                            <input type="file" class="input-immagine" id="input-banner" accept="image/png, image/jpeg" style="display: none">
                            <div class="immaginiContainer" id="immagine_banner"><i id="banner-ico" class="fa-solid fa-image"></i></div>
                        </div>
                        <div id="intra-mc">
                            <label for="categoriaRicetta">Categoria Ricetta:</label>
                            <select id="categoriaRicetta" name="categoriaRicetta" onchange="nascondiOpzioneIniziale()">
                                <option value="" disabled selected>Seleziona una Portata</option>
                                <option value="antipasto">Antipasto</option>
                                <option value="primoPiatto">Primo Piatto</option>
                                <option value="secondoPiatto">SecondoPiatto</option>
                                <option value="dessert">Dessert</option>
                                <option value="piattoUnico">Piatto Unico</option>
                                <option value="brunch">Bruch</option>
                            </select>
                        </div>
                    </div>
                </div>


            <div class="form-section" id="ingredienti">
                <label for="ingredienti[]">Ingredienti:</label>
                <input type="number" name="tempo_preparazione" placeholder="Inserisci il tempo di preparazione" maxlength="3">
                <div class="ingrediente-gruppo">

                    <input type="text" class="ingrediente" name="ingredienti[]" maxlength="40">
                    <input type="number" class="quantita" name="quantita[]" maxlength="3" placeholder="Quantità" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Quantità')">
                    <select class="unita" name="unita[]">
                        <option value="" disabled selected>-</option>
                        <option value="grammi">grammi</option>
                        <option value="litri">litri</option>
                    </select>
                </div>
                <button type="button" class="aggiungi-ingrediente" onclick="aggiungiIngrediente()">+</button>
            </div>

            <div class="form-section" id="procedimentiContainer">
                <label for="procedimentiRicetta">Procedimento:</label>
                <div class="procedimento-gruppo" id="procedimento1">
                    <span class="procedimento-numero">1.</span>
                    <input type="text" class="procedimento" name="procedimentiRicetta[]" maxlength="150">
                </div>
                <button type="button" class="aggiungi-procedimento" onclick="aggiungiProcedimento()">+</button>
            </div>


            <div class="form-section" id="tips">
                <label for="tips[]">Tips:</label>
                <div class="gruppo-tips">
                    <input type="text" class="tips" name="tips[]" maxlength="150">
                </div>
                <button type="button" class="aggiungi-tips" onclick="aggiungiTips()">+</button>
            </div>


            <!--<div class="form-section" id="caricamentoImmagini">
                <label for="immagineRicetta">Carica Immagini:</label>
                <div class="immaginiContainer" id="inserimentoAnteprimeMarker" style="border: 1px solid">
                    <input type="file" class="input-immagine" id="image-input" accept="image/png, image/jpeg" style="display: none">
                </div>
                <button type="button" class="aggiungi-immagine" onclick="aggiungiImmagine()">+</button>
            </div>-->

            <div class="invio">
                <button type="submit">Salva la tua Ricetta</button>
            </div>

        </form>

    </section>
</main>

<?php
include('../structure/footer/footer.html')
?>

<script src="script/main_script.js"></script>
<script src="script/banner_drag_drop.js"></script>
<script src="script/ajax_inserimento.js"></script>
<script src="script/tips_script.js"></script>
</body>
</html>
