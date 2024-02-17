<?php

include '../dbconnection.php';
include '../auth.php';

$username = $_SESSION['username'];

if(isset($db)) {
    $sql = "SELECT descrizione_recensione,voto,ricetta FROM recensione WHERE utente = $1";
    $result = pg_query_params($db, $sql, array($username));
    while($row = pg_fetch_assoc($result)){
        $sql_ricetta = "SELECT titolo FROM ricetta WHERE id = $1";
        $result2 = pg_query_params($db,$sql_ricetta,array($row['ricetta']));
        $row2 = pg_fetch_assoc($result2);
        $stars = str_repeat('<i class="fa-solid fa-star"></i>', $row['voto']);
        if($row['voto']<5){
            $stars .= str_repeat('<i class="fa-regular fa-star"></i>', 5-$row['voto']);
        }
        echo '<div class="review">
                <div class="up-rec">
                    <a href="dettagli_ricetta.php?id='. $row['ricetta'] .'"><strong class="review-title">'. $row2['titolo'] .'</strong><a/>
                    <p id="voto-p">' . $stars .'</p>
                </div>
                <p id="rec-p">' . $row['descrizione_recensione'] . '</p>
            </div>' ;
    }
}