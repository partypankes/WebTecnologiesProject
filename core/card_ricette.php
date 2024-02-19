<?php

if(isset($string) && isset($row)) {

    $imageData = pg_unescape_bytea($row['banner']);

        $stars = str_repeat('<i class="fa-solid fa-star"></i>', $row['voto']);
        if($row['voto']<5){
            $stars .= str_repeat('<i class="fa-regular fa-star"></i>', 5-$row['voto']);
        }

            $string  .= '
                        <div class="card" style=" background-image: url(data:image/jpeg;base64,'. base64_encode($imageData) .')">
                            <div class="top-card">
                                <div class="container-top">
                                    <p><span id="voto">'. $stars . '</span></p>
                                    <p><span id="time">'. $row['tempo_preparazione'] . '</span><i class="fa-regular fa-clock"></i></p>
                                </div>
                            </div>
                        
                            <div class="food-info">
                                <p><a href="dettagli_ricetta.php?id='. $row['id'] . '">'. $row['titolo'] .'</a></p>
                                <p>by <span>'. $row['utente'].'</span></p>
                            </div>
                        </div>';

}
