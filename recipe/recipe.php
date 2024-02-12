

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Inserisci Ricetta</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>


    <section id="container">
        <div class="title">
            <h1>Inserisci La Tua Ricetta</h1>
        </div>

        <form id="ricettaForm" action="inserimento_ricetta.php" method="post" enctype="multipart/form-data">
            <div class="form-section">
                <label for="titoloRicetta">Titolo Ricetta:</label>
                <input type="text" id="titoloRicetta" name="titoloRicetta">
            </div>

            <div class="form-section" >
                <label for="descrizioneRicetta">Descrizione:</label>
                <textarea id="descrizioneRicetta" name="descrizioneRicetta"></textarea>
            </div>

            <div class="form-section" id="banner">
                <label for="immagine_banner">Banner:</label>
                <input type="file" class="input-immagine" id="input-banner" accept="image/png, image/jpeg" style="display: none">
                <div class="immaginiContainer" id="immagine_banner">
                </div>
            </div>

            <div class="form-section" id="ingredienti">
                <label for="ingredienti[]">Ingredienti:</label>
                <input type="number" name=" " placeholder="Inserisci il tempo di preparazione">
                <div class="ingrediente-gruppo">

                    <input type="text" class="ingrediente" name="ingredienti[]">
                    <input type="text" class="quantita" name="quantita[]" placeholder="Quantità" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Quantità')">
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
                    <input type="text" class="procedimento" name="procedimentiRicetta[]">
                </div>
                <button type="button" class="aggiungi-procedimento" onclick="aggiungiProcedimento()">+</button>
            </div>


            <div class="form-section" id="tips">
                <label for="tips[]">Tips:</label>
                <div class="gruppo-tips">
                    <input type="text" class="tips" name="tips[]">
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



            <div class="form-section">
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


            <div class="invio">
                <button type="submit">Invia Ricetta</button>
            </div>

        </form>

    </section>

<script src="script/main_script.js"></script>
<script src="script/banner_drag_drop.js"></script>
<script src="script/ajax_inserimento.js"></script>
<script src="script/script_tips.js"></script>
</body>
</html>
