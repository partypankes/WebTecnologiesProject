<?php

function name_and_user($id): void
{
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT titolo,utente,ricetta.ricetta FROM ricetta WHERE id = $1";
        $result = pg_query_params($db,$sql,array($id));
        if($row = pg_fetch_assoc($result)) {
            echo "<h1>" . $row['titolo'] . "</h1><p>By " . $row['utente'] . '</p><p style="color: black">'. $row['ricetta'] ."</p>";
        } else {
            echo "Errore";
        }
    }
}

function immagine_banner($id)
{
    include '../dbconnection.php';
    if(isset($db)) {
        /*$data = file_get_contents('immagine_prova.jpg');
        $escapedData = pg_escape_bytea($data);
        pg_query_params($db,"UPDATE ricetta  SET copertina = $1 WHERE id = $2", array($escapedData,$id));
        */
        $sql = "SELECT copertina FROM ricetta WHERE id = $1";
        $result = pg_query_params($db, $sql, array($id));
        if ($row = pg_fetch_assoc($result)) {
            $imageData = pg_unescape_bytea($row['copertina']);
            return 'data:image/jpeg;base64,' . base64_encode($imageData);
        }
    }
    return ''; // Ritorna una stringa vuota in caso di errore
}
