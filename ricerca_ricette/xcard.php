<?php


require '../dbconnection.php';

if(isset($db) && isset($sql) && isset($parametri)) {
    $result = pg_query_params($db,$sql,$parametri);
    if($result) {
        while($row = pg_fetch_assoc($result)) {
            $imageData = pg_unescape_bytea($row['banner']);
            echo '<div class="xcard"> 
                    <img class="banner-xcard" src="data:image/jpeg;base64,'. base64_encode($imageData) .'"/>'.
                '<div class="info-xcard">
                    <a>' . $row['titolo'] . '</a>
                    <div class="sub-xcard">
                    <p>by <span>' . $row['utente'] . '</span></p>
                    <div class="extra-xcard">
                    <p><span id="minutes">'. $row['tempo_preparazione'] . '</span><i class="fa-regular fa-clock"></i></p>
                    <p><span id="voto">xxxxxxx</span>/5<i class="fa-solid fa-star"></i></p>
                    </div>
                </div>
            </div>
            </div>';
        }

    }

}
