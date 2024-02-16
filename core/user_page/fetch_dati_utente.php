<?php

require '../dbconnection.php';

$username = $_POST['username'];

if(isset($db)) {

    $sql = "SELECT * FROM utente WHERE username = $1";
    pg_query_params($db,$sql,array($username));


}