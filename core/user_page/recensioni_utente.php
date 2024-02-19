
<?php

include '../dbconnection.php';
include '../auth.php';

$sql = "SELECT id,descrizione_recensione,voto,ricetta FROM recensione WHERE utente = $1";
$sql_paginazione = 'SELECT COUNT(*) as total FROM recensione WHERE utente = $1';
$parametri[] = $_SESSION['username'];
$func = 'richiedi_recensione_utente';
include '../paginazione.php';
if(isset($db) && isset($controls)) {

    $result = pg_query_params($db, $sql, $parametri);
    $string = "";
    if(pg_num_rows($result) == 0) {
        echo "<strong>Non ci sono risultati</strong>";
    }
    while($row = pg_fetch_assoc($result)){
        $sql_ricetta = "SELECT titolo FROM ricetta WHERE id = $1";
        $result2 = pg_query_params($db,$sql_ricetta,array($row['ricetta']));
        $row2 = pg_fetch_assoc($result2);
        $stars = str_repeat('<i class="fa-solid fa-star"></i>', $row['voto']);
        if($row['voto']<5){
            $stars .= str_repeat('<i class="fa-regular fa-star"></i>', 5-$row['voto']);
        }
        $string.=  '<div class="review">
                <div class="up-rec">
                    <a href="dettagli_ricetta.php?id='. $row['ricetta'] .'"><strong class="review-title">'. $row2['titolo'] .'</strong><a/>
                    <p id="voto-p">' . $stars .'</p>
                </div>
                <p id="rec-p">' . $row['descrizione_recensione'] . '</p>
                 <div class="elimina">
                        <button id="elimina-review" onclick="eliminaRecensione('. $row['id'] .')" class="elimina-btn" type="submit"><i class="fas fa-trash-alt"></i>Elimina</button>
                    </div>
            </div>' ;
    }

    echo '<div class="container-card">' . $string . '</div>';
    echo '<div class="container-control">' . $controls . '</div>';
}