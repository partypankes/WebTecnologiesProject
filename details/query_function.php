<?php

function name_and_user($id): void
{
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT titolo,utente,ricetta.ricetta FROM ricetta where id = $1";
        $result = pg_query_params($db,$sql,array($id));
        if($row = pg_fetch_assoc($result)) {
            echo "<h1>" . $row['titolo'] . "</h1><p>By " . $row['utente'] . '</p><p style="color: black">'. $row['ricetta'] ."</p>";
        } else {
            echo "Errore";
        }
    }
}

