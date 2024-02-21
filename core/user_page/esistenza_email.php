<?php
include '../dbconnection.php';

if(isset($db)) {
    $sql_email = "SELECT COUNT(email) FROM utente WHERE email = $1";
    $result = pg_query_params($db, $sql_email, array($_POST['email']));
    $count = pg_fetch_result($result, 0, 0);
    if ($count > 0) {
        echo "false";
    } else {
        echo "true";
    }
}