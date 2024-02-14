<?php

require '../dbconnection.php';


if(isset($db)) {
    $input = $_GET['input'];

    $sql = 'SELECT id,banner,utente,tempo_preparazione,descrizione,voto,titolo FROM ricetta WHERE titolo like $1';
    $parametri[] = '%' . pg_escape_string($input) . '%';

    include 'xcard.php';

}


