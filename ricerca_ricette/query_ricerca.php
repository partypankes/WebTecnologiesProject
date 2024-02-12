<?php

require '../dbconnection.php';

$tempo_preparazione = $_POST['tempo_preparazione'];
$portata = $_POST['portata'];

$condizioni = [];
$parametri = [];
$i = 1; // Contatore per i segnaposto dei parametri

if (!empty($_POST['tempo_preparazione'])) {
    $condizioni[] = "tempo_preparazione < $" . $i++;
    $parametri[] = $_POST['tempo_preparazione'];
}

if (!empty($_POST['portata'])) {
    $condizioni[] = "portata = $" . $i++;
    $parametri[] = $_POST['portata'];
}

$sql = "SELECT * FROM ricetta";
if (!empty($condizioni)) {
    $sql .= " WHERE " . implode(' AND ', $condizioni);
}






//SELECT * FROM ricetta WHERE portata = primoPiatto
if(isset($db)) {
    $result = pg_query_params($db,$sql,array($tempo_preparazione,$portata));
    if($result)
        echo "bravo pisello";
        /*qua dentro ci va la logica per la stampa delle ricette o comunque quella per passare i dati ad ajax*/


}
