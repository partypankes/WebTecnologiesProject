<?php

function name_and_user($id): void
{
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT titolo,utente,descrizione FROM ricetta WHERE id = $1";
        $result = pg_query_params($db,$sql,array($id));
        if($row = pg_fetch_assoc($result)) {
            echo "<h1 style='color: white; max-width: 100%'>" . $row['titolo'] . "</h1><p style='color: lightslategrey; font-size: 1vw'>By " . $row['utente'] . '</p><p style="color: darkgrey; font-size: 1.5vw">'. $row['descrizione'] ."</p>";
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

function carica_recensione($id) {
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT descrizione_recensione,voto,utente FROM recensione WHERE ricetta = $1";
        $result = pg_query_params($db, $sql, array($id));
        while($row = pg_fetch_assoc($result)){
            echo '<div class="review">
                <strong>'. $row['utente'] .'</strong>
                <p>' . $row['descrizione_recensione'] . '</p>
            </div>' ;
        }
    }

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