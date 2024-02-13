<?php

require '../dbconnection.php';

$tempo_preparazione = $_POST['tempo_preparazione'];
$portata = $_POST['portata'];

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

$sql = "SELECT * FROM ricetta";
if (!empty($condizioni)) {
    $sql .= " WHERE " . implode(' AND ', $condizioni);
}


//SELECT * FROM ricetta WHERE portata = primoPiatto
if(isset($db)) {
    $result = pg_query_params($db,$sql,$parametri);
    if($result) {
        $ricetta_html = "";
        while($row = pg_fetch_assoc($result)) {
             $ricetta_html .= "<h1 style='color: white; max-width: 40%'>" . $row['titolo'] . "</h1><p style='color: lightslategrey; font-size: 1vw'>By " . $row['utente'] . '</p><p style="color: darkgrey">'. $row['descrizione'] ."</p>";
        }

        echo $ricetta_html;
    }
        echo "bravo pisello";
        /*qua dentro ci va la logica per la stampa delle ricette o comunque quella per passare i dati ad ajax*/


}
