<link rel="stylesheet" href="assets/global.css">
<link rel="stylesheet" href="assets/css/inserimento_ricetta.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">


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
                        <input type="file" class="input-immagine" id="input-banner" accept="image/png, image/jpeg" style="display: none">
                        <div class="immaginiContainer" id="immagine_banner" style="cursor: pointer"><i id="banner-ico" class="fa-solid fa-image"></i></div>
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
                <input type="number" id="tempo_preparazione" name="tempo_preparazione" placeholder="Inserisci il tempo di preparazione" maxlength="3">
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

            <div class="invio">
                <button type="submit">Salva la tua Ricetta</button>
            </div>

        </form>
    </section>

    <script src="assets/js/inserimento_ricetta/main.js"></script>
    <script src="assets/js/inserimento_ricetta/controlli.js"></script>
    <script src="assets/js/inserimento_ricetta/banner_drag_drop.js"></script>
    <script src="assets/js/inserimento_ricetta/ajax_inserimento.js"></script>
    <script src="assets/js/inserimento_ricetta/tips_inserimento.js"></script>

