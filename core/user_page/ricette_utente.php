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
        if(pg_fetch_assoc($result) == 0) {
            echo "<strong>Non ci sono risultati</strong>";
        }
        while($row = pg_fetch_assoc($result)) {
            $imageData = pg_unescape_bytea($row['banner']);
            $string  .= '<div class="xcard"> 
                    <img class="banner-xcard" src="data:image/jpeg;base64,'. base64_encode($imageData) .'"/>'.
                '<div class="info-xcard">
                        <a href="dettagli_ricetta.php?id='. $row['id'] . '">' . $row['titolo'] . '</a>
                        <div class="sub-xcard">
                            <p>by <span>' . $row['utente'] . '</span></p>
                            <div class="extra-xcard">
                                <p><span id="minutes">'. $row['tempo_preparazione'] . '</span><i class="fa-regular fa-clock"></i></p>
                                <p><span id="voto">'. $row['voto'] . '</span>/5<i class="fa-solid fa-star"></i></p>
                                <p><i class="fas fa-trash-alt" onclick="eliminaRicetta('. $row['id'] .')"></i></p>
                            </div>
                        </div>
                    </div>
                </div>';
        }

        echo '<div class="container-xcard">' . $string . '</div>';
        echo '<div class="container-control">' . $controls . '</div>';
    }

}




