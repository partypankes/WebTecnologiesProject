<?php
include '../dbconnection.php';

if(isset($db)) {
    $sql_eliminazione = 'DELETE FROM recensione WHERE id = $1;';
    $result = pg_query_params($db,$sql_eliminazione,(array($_GET['id'])));
    if($result) {
        include 'recensioni_utente.php';
    }
}