<?php

function name_and_user($id): void
{
    include 'dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT titolo,utente,descrizione FROM ricetta WHERE id = $1";
        $result = pg_query_params($db,$sql,array($id));
        if($row = pg_fetch_assoc($result)) {
            echo "<h1>" . $row['titolo'] . "</h1><p>". $row['descrizione'] ."</p><p id='user'>By <span>" . $row['utente'] . "</span></p>";
        } else {
            echo "Errore";
        }
    }
}

function immagine_banner($id): string
{
    include 'dbconnection.php';
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
    include 'dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT descrizione_recensione,voto,utente FROM recensione WHERE ricetta = $1";
        $result = pg_query_params($db, $sql, array($id));
        if(pg_fetch_assoc($result) == 0) {
            echo "<strong>Non ci sono Recensioni</strong>";
        }
        while($row = pg_fetch_assoc($result)){
            $stars = str_repeat('<i class="fa-solid fa-star"></i>', $row['voto']);
            if($row['voto']<5){
                $stars .= str_repeat('<i class="fa-regular fa-star"></i>', 5-$row['voto']);
            }
            echo '<div class="review">
                <div class="up-rec">
                    <strong>'. $row['utente'] .'</strong>
                    <p id="voto-p">' . $stars .'</p>
                </div>
                <p id="rec-p">' . $row['descrizione_recensione'] . '</p>
            </div>' ;
        }
    }

}

function esistenza_recensione($id, $utente): bool {
    include 'dbconnection.php';
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

function utente_ricetta ($id,$utente): bool {
    include 'dbconnection.php';
    if(isset($db)) {
        $sql = "SELECT utente FROM ricetta WHERE id = $1";
        $result = pg_query_params($db, $sql, array($id));
        $row = pg_fetch_assoc($result);
        if($row['utente'] == $utente) {
            return false;
        } else {
            return true;
        }
    }

    return false;

}

