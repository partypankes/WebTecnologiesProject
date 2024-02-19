<?php
function top5(): void
{
    include 'core/dbconnection.php';

    if (isset($db)) {

        $sql = "SELECT * FROM ricetta WHERE voto IS NOT NULL ORDER BY voto DESC LIMIT 5 ;";
        $result = pg_query($db, $sql);
        $string = "";

        while ($row = pg_fetch_assoc($result)) {
            include 'core/card_ricette.php';
        }
        echo '<div class="container-card">' . $string . '</div>';
    }
}

    function primi_piatti(): void
    {
        include 'core/dbconnection.php';

        if (isset($db)) {

            $sql = "SELECT * FROM ricetta WHERE portata = $1 AND voto IS NOT NULL ORDER BY voto DESC LIMIT 5 ;";
            $result = pg_query_params($db, $sql, array("primoPiatto"));
            $string = "";

            while ($row = pg_fetch_assoc($result)) {
                include 'core/card_ricette.php';
            }
            echo '<div class="container-card">' . $string . '</div>';
        }
    }


    /*
    while($row = pg_fetch_assoc($result)) {
        $imageData = pg_unescape_bytea($row['banner']);
        echo  '<div class="ycard">
                    <div class="y-banner">
                        <img class="banner-ycard" src="data:image/jpeg;base64,'. base64_encode($imageData)  .'"/>
                                <p id="user-ycard">by <span>' . $row['utente'] . '</span></p>
                                </div>
                                <div class="info-ycard">
                                <a href="dettagli_ricetta.php?id=' . $row['id'] . '">'.$row['titolo'] .'</a>
                                <div class="extra-ycard">
                                    <p><span id="minutes">'. $row['tempo_preparazione'] .'</span><i class="fa-regular fa-clock"></i>
                                    </p>
                                    <p><span id="voto">'. $row['voto'] . '</span>/5<i class="fa-solid fa-star"></i></p>
                                </div>

                            </div>
                        </div>';

    }
*/
