<?php

include '../dbconnection.php';

if(isset($db)) {
    $sql = "DELETE FROM ricetta WHERE id = $1";
    pg_query_params($db,$sql,array($_GET['id']));

}