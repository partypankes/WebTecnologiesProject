<?php

require '../dbconnection.php';


if(isset($db)) {

    $sql = 'SELECT id,banner,utente,tempo_preparazione,descrizione,voto,titolo FROM ricetta WHERE titolo ILIKE $1';
    if(isset($_GET['input'])) {
        $input = $_GET['input'];
        $parametri[] = '%' . pg_escape_string($input) . '%';
    } else {
        $parametri[] = '%%';
    }

    include 'xcard.php';

}


