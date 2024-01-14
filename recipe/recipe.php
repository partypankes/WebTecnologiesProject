<?php include "../auth/auth.php"?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Inserisci Ricetta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Inserisci la tua Ricetta</h1>
</header>

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
        <input type="text" class="ingrediente" name="ingredienti[]">
        <button type="button" onclick="aggiungiIngrediente()">Aggiungi Ingrediente</button>
    </div>

    <div class="form-section">
        <label for="procedimentoRicetta">Procedimento:</label>
        <textarea id="procedimentoRicetta" name="procedimentoRicetta"></textarea>
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


    <button type="submit">Invia Ricetta</button>
</form>

<script src="script.js"></script>
</body>
</html>