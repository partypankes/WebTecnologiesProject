<?php

$tempo_preparazione = $_POST['tempo_preparazione'];
$portata = $_POST['portata'];
$ricerca = $_POST['ricerca'];

$condizioni = [];
$parametri = [];
$i = 1; // Contatore per i segnaposto dei parametri

if (!($_POST['tempo_preparazione'] == 'undefined')) {
    $condizioni[] = "tempo_preparazione < $" . $i++;
    $parametri[] = $_POST['tempo_preparazione'];
}

if (!($_POST['portata'] == 'undefined')) {
    $condizioni[] = "portata = $" . $i++;
    $parametri[] = $_POST['portata'];
}

$sql = "SELECT id,banner,utente,tempo_preparazione,descrizione,voto,titolo FROM ricetta";
if (!empty($condizioni)) {
    $sql .= " WHERE " . implode(' AND ', $condizioni);
    if(!($_POST['ricerca'] == 'undefined')) {
        $sql .= " AND titolo ILIKE $" . $i++;
        $parametri[] = '%' . pg_escape_string($ricerca) . '%';
    }

} else {
    $sql .= " WHERE titolo ILIKE $" . $i++;
    $parametri[] = '%' . pg_escape_string($ricerca) . '%';
}

include '../xcard.php';


//SELECT * FROM ricetta WHERE portata = primoPiatto
