<?php

function name_and_user($id): void
{
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT titolo,utente,descrizione FROM ricetta WHERE id = $1";
        $result = pg_query_params($db,$sql,array($id));
        if($row = pg_fetch_assoc($result)) {
            echo "<h1>" . $row['titolo'] . "</h1><p id='user'>By " . $row['utente'] . "</p><p>". $row['descrizione'] ."</p>";
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

function carica_recensione($id): void
{
    include '../dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT descrizione_recensione,voto,utente FROM recensione WHERE ricetta = $1";
        $result = pg_query_params($db, $sql, array($id));
        while($row = pg_fetch_assoc($result)){
            echo '<div class="review">
                <strong>'. $row['utente'] .'</strong>
                <p>' . $row['descrizione_recensione'] . '</p>
                <p>'. $row['voto'] .'</p>
            </div>' ;
        }
    }

}

function esistenza_recensione($id, $utente): bool {
    include '../dbconnection.php';
    if (isset($db)) {
        $sql = "SELECT id FROM recensione WHERE ricetta = $1 AND utente = $2";
        $result = pg_query_params($db, $sql, array($id, $utente));

        if ($result && pg_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }
    return false;
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