<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Inserisci Ricetta</title>
    <link rel="stylesheet" href="../global.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <section id="container">
        <div class="title">
            <h1>Inserisci La Tua Ricetta</h1>
        </div>

        <form id="ricettaForm" action="inserimento_ricetta.php" method="post">
            <div class="form-section">
                <label for="titoloRicetta">Titolo Ricetta:</label>
                <input type="text" id="titoloRicetta" name="titoloRicetta">
            </div>

            <div class="form-section" >
                <label for="descrizioneRicetta">Descrizione:</label>
                <textarea id="descrizioneRicetta" name="descrizioneRicetta"></textarea>
            </div>

            <div class="form-section">
                <label for="tips">Tips:</label>
                <textarea id="tips" name="tips"></textarea>
            </div>

            <div class="form-section">
                <label for="servingSuggestion">Serving:</label>
                <textarea id="servingSuggestion" name="servingSuggestion"></textarea>
            </div>


            <div class="form-section">
                <label for="immagineRicetta">Carica Immagini:</label>
                <input type="file" id="immagineRicetta" name="immagineRicetta" accept="image/png, image/jpeg" multiple onchange="mostraAnteprima(event)">
            </div>

            <div id="anteprimaImmagine"></div>



            <div class="form-section" id="ingredienti">
                <label for="ingredienti[]">Ingredienti:</label>
                <div class="ingrediente-gruppo">
                    <input type="text" class="ingrediente" name="ingredienti[]">
                    <input type="text" class="quantita" name="quantita[]" placeholder="Quantità" onfocus="clearPlaceholder(this)" onblur="restorePlaceholder(this, 'Quantità')">
                    <select class="unita" name="unita[]">
                        <option value="" disabled selected>-</option>
                        <option value="g">g</option>
                        <option value="ml">ml</option>
                    </select>
                </div>
                <button type="button" class="aggiungi-ingrediente" onclick="aggiungiIngrediente()">+</button>
            </div>


            <div class="form-section">
                <label for="procedimentoRicetta">Procedimento:</label>
                <input type="text" id="procedimentoRicetta" name="procedimentoRicetta"></input>
            </div>

            <div class="form-section">
                <label for="categoriaRicetta">Categoria Ricetta:</label>
                <select id="categoriaRicetta" name="categoriaRicetta" onchange="nascondiOpzioneIniziale()">
                    <option value="" disabled selected>Seleziona una categoria</option>
                    <option value="vegane">Vegane</option>
                    <option value="dolci">Dolci</option>
                    <option value="veloci">Veloci</option>
                    <option value="tradizionali">Tradizionali</option>
                    <option value="internazionali">Internazionali</option>
                </select>
            </div>


            <div class="invio">
                <button type="submit">Invia Ricetta</button>
            </div>

        </form>

    </section>

<script src="script.js"></script>
</body>
</html>
