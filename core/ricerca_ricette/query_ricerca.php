<?php

$tempo_preparazione = $_POST['tempo_preparazione'];
$portata = $_POST['portata'];
$ricerca = $_POST['ricerca'];
$np = preg_replace('#[^0-9]#','',$_POST['np']);

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
$sql_paginazione = "SELECT COUNT(*) AS total FROM ricetta";
if (!empty($condizioni)) {
    $sql .= " WHERE " . implode(' AND ', $condizioni);
    $sql_paginazione .= " WHERE " . implode(' AND ', $condizioni);

    if(!($_POST['ricerca'] == 'undefined')) {
        $sql .= " AND titolo ILIKE $" . $i;
        $sql_paginazione .= " AND titolo ILIKE $" . $i++;
        $parametri[] = '%' . pg_escape_string($ricerca) . '%';
    }

} else {
    $sql .= " WHERE titolo ILIKE $" . $i;
    $sql_paginazione .= " WHERE titolo ILIKE $" . $i++;
    $parametri[] = '%' . pg_escape_string($ricerca) . '%';
}


include '../dbconnection.php';
$func = "richiedi_pagina";
include '../paginazione.php';
if(isset($db) && isset($controls)) {

    $result = pg_query_params($db, $sql, $parametri);
    if ($result) {
        $string = "";
        while ($row = pg_fetch_assoc($result)) {
            include '../card_ricette.php';
        }
        echo '<div class="container-card">' . $string . '</div>';
        echo '<div class="container-control">' . $controls . '</div>';
    }
}




