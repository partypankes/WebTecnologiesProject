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
if(isset ($db)) {
    $rpp = 10;
    $resultTotal = pg_query_params($db, $sql_paginazione,$parametri);
    $rowTotal = pg_fetch_assoc($resultTotal);
    $total_rows = $rowTotal['total'];
    $last = ceil($total_rows / $rpp);
    if($last < 1) {
        $last = 1;
    }

    if($np < 1) {
        $np = 1;
    } else if($np > $last) {
        $np = $last;
    }

    $controls = "";

    if($last != 1) {
        if($np > 1) {
            $controls .= '<button onclick="richiedi_pagina(' . ($np-1) . ')">&lt;</button>';
        }
        $controls .= '<b> Page ' . $np . ' of ' . $last . '</b>';
        if($np != $last) {
            $controls .= '<button onclick="richiedi_pagina('. ($np+1) . ')">&gt;</button>';
        }
    }



    $sql .= ' LIMIT ' . $rpp . ' OFFSET ' .($np - 1 )*$rpp;
    include 'paginazione_xcard.php';
}




