<?php

if(isset($string) && isset($row)) {
            $imageData = pg_unescape_bytea($row['banner']);
            $string  .= '
<div class="card" style=" background-image: url(data:image/jpeg;base64,'. base64_encode($imageData) .')">
    <div class="rating">
        <div class="stars">
            <p><span id="voto">'. $row['voto'] . '</span>/5<i class="fa-solid fa-star" style="color:magenta"></i></p>
        </div>
    </div>

    <div class="food-info">
        <p><a href="dettagli_ricetta.php?id='. $row['id'] . '">'. $row['titolo'] .'</a><br/><span>By '. $row['utente'].'</span></p>

    </div>
</div>';

}
