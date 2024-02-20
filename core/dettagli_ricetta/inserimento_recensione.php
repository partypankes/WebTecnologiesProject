<?php

require '../dbconnection.php';
require '../query_function.php';
require '../auth.php';


$descrizione_recensione = $_POST['descrizione-recensione'];
$voto = $_POST['voto-recensione'];
$id = $_POST['id'];
$username = $_SESSION['username'];

if(isset($db)) {
    if(esistenza_recensione($id,$username))
    {
        $sql = "UPDATE recensione SET descrizione_recensione = $1 , voto = $2 WHERE utente = $3 AND ricetta = $4";

    } else {
        $sql = "INSERT INTO recensione (descrizione_recensione,voto,utente,ricetta) VALUES ($1,$2,$3,$4)";

    }
    $result = pg_query_params($db,$sql,array(htmlspecialchars($descrizione_recensione),$voto,$username,$id));


    if($result) {
        carica_recensione($id);
        include '../media_voto.php';
    }




}