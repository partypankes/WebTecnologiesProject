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
            $imageData = pg_unescape_bytea($row['banner']);

            $stars = str_repeat('<i class="fa-solid fa-star"></i>', $row['voto']);
            if($row['voto']<5){
                $stars .= str_repeat('<i class="fa-regular fa-star"></i>', 5-$row['voto']);
            }

            $string  .= '
                        <div class="card" style=" background-image: url(data:image/jpeg;base64,'. base64_encode($imageData) .')">
                        
                            <div class="elimina-icon">
                                <i class="fas fa-trash-alt" onclick="eliminaRicetta('. $row['id'] .')"></i>
                            </div> 
                            
                            <div class="top-card">
                                <div class="container-top">
                                    <p><span id="voto">'. $stars . '</span></p>
                                    <p><span id="time">'. $row['tempo_preparazione'] . '\'</span><i class="fa-regular fa-clock"></i></p>
                                </div>
                            </div>
                        
                            <div class="food-info">
                                <p><a href="dettagli_ricetta.php?id='. $row['id'] . '">'. $row['titolo'] .'</a></p>
                                <p>by <span>'. $row['utente'].'</span></p>
                            </div>
                            
                            
                        </div>';

        }

        echo '<div class="container-card">' . $string . '</div>';
        echo '<div class="container-control">' . $controls . '</div>';
    }

}




