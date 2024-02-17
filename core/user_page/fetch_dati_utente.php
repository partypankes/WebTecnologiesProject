<?php

if (!isset($db)) {
    require 'core/dbconnection.php';
}


$username = $_SESSION['username'];


    $sql = "SELECT * FROM utente WHERE username = $1";
    $result = pg_query_params($db,$sql,array($username));
    if($result) {
        $row = pg_fetch_assoc($result);

        echo '<p>Username: ' . $row['username'] . '</p>
                        <p>Nome: <span>'. $row['nome'] . '</span></p>
                        <p>Cognome: <span>'. $row['cognome'] .'</span></p>
                        <p>Data: <span>'. $row['data_di_nascita'] .'</span></p>
                        <p>Sesso: <span>'. $row['sesso'].'</span></p>
                        <p>Email: <span>'. $row['email']. '</span></p>';



}