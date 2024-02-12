<?php

function name_and_user($id): void
{
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT titolo,utente,descrizione FROM ricetta WHERE id = $1";
        $result = pg_query_params($db,$sql,array($id));
        if($row = pg_fetch_assoc($result)) {
            echo "<h1 style='color: white; max-width: 40%'>" . $row['titolo'] . "</h1><p style='color: lightslategrey; font-size: 1vw'>By " . $row['utente'] . '</p><p style="color: darkgrey">'. $row['descrizione'] ."</p>";
        } else {
            echo "Errore";
        }
    }
}

function immagine_banner($id): string
{
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT banner FROM ricetta WHERE id = $1";
        $result = pg_query_params($db, $sql, array($id));
        if ($row = pg_fetch_assoc($result)) {
            $imageData = pg_unescape_bytea($row['banner']);
            return 'data:image/jpeg;base64,' . base64_encode($imageData);
        }
    }
    return ''; // Ritorna una stringa vuota in caso di errore
}

/*function image_gallery(): void
{
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT  immagine FROM immagini i WHERE ricetta = $1";
        $result = pg_query_params($db, $sql, array(4));
        $i = 0;
        $row = pg_fetch_assoc($result);
        $imageData = pg_unescape_bytea($row['immagine']);
        echo '<img src="' . ('data:image/jpeg;base64,' . base64_encode($imageData)) . '" alt="image' . $i . '">';


    }

}
*/