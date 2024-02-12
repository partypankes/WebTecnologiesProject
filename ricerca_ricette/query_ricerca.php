<?php

require '../dbconnection.php';

$sql = $_POST['query'];

//SELECT * FROM ricetta WHERE portata = primoPiatto
if(isset($db)) {
    $result = pg_query($db,$sql);

    if($row = pg_fetch_assoc($result)) {
        /*qua dentro ci va la logica per la stampa delle ricette o comunque quella per passare i dati ad ajax*/
    }


}
