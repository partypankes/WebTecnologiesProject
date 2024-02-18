<?php

if (!isset($db)) {
    require 'core/dbconnection.php';
}


$username = $_SESSION['username'];


    $sql = "SELECT * FROM utente WHERE username = $1";
    $result = pg_query_params($db,$sql,array($username));
    if($result) {
        $row = pg_fetch_assoc($result);
        if($row['sesso'] == 'M') {
            $sesso = "Uomo";
        } else if ($row['sesso'] == 'F') {
            $sesso = "Donna";
        } else {
            $sesso = "Altro";
        }
        echo '<p>Username: <span>' . $row['username'] . '</span></p>
                    <p>Nome: <span>'. $row['nome'] . '</span></p>
                    <p>Cognome: <span>'. $row['cognome'] .'</span></p>
                    <p>Data di nascita: <span>'. $row['data_di_nascita'] .'</span></p>
                    <p>Sesso: <span>'. $sesso .'</span></p>
                    <p>Email: <span>'. $row['email']. '</span></p>';

    }