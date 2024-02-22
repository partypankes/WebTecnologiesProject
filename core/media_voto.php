<?php

if(isset($db) && isset($id)) {

    $sql = "SELECT voto FROM recensione WHERE ricetta = $1";
    $result = pg_query_params($db,$sql,array($id));
    $somma = 0;
    $cont = 0;
    if($result) {
        while($row = pg_fetch_assoc($result)) {
            $somma += $row['voto'];
            $cont++;
        }
        $somma /= $cont;

        $sql_voto_ricetta = "UPDATE ricetta SET voto = $1 WHERE id = $2";
        pg_query_params($db,$sql_voto_ricetta,array(floor($somma),$id));
    }

}