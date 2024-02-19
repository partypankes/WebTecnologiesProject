<?php

include '../dbconnection.php';

include '../auth.php';

$sql_paginazione = 'SELECT COUNT(*) as total FROM ricetta WHERE utente = $1';
$sql = 'SELECT * FROM ricetta WHERE utente = $1 ';
$parametri[] = $_SESSION['username'];
$func = 'richiedi_post_utente';
include '../paginazione.php';
if(isset ($db) && isset($controls)) {

    $result = pg_query_params($db,$sql,$parametri);
    $string = "";
    if($result) {
        if(pg_num_rows($result) == 0) {
            echo "<strong>Non ci sono risultati</strong>";
        }
        while($row = pg_fetch_assoc($result)) {
            include '../card_ricette.php';

        }

        echo '<div class="container-card">' . $string . '</div>';
        echo '<div class="container-control">' . $controls . '</div>';
    }

}




