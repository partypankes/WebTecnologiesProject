<?php
include '../dbconnection.php';

if(isset($db) && isset($sql) && isset($parametri) && isset($sql_paginazione) && isset($i) &&isset($controls)) {

    $result = pg_query_params($db,$sql,$parametri);
    if($result) {
        $string = "";
        while($row = pg_fetch_assoc($result)) {
            include '../xcard.php';
        }
        echo $string;
        echo $controls;

    }

}