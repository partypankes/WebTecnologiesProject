<?php

include '../dbconnection.php';

include '../auth.php';


$sql = 'SELECT * FROM ricetta WHERE utente = $1';

if(isset($db)) {
    $result = pg_query_params($db,$sql,array($_SESSION['username']));
    $string = "";

    while($row = pg_fetch_assoc($result)) {
        include '../xcard.php';
    }

    echo $string;
}




