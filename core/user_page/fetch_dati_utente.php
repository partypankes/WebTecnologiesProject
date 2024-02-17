<?php

if (!isset($db)) {
    require 'core/dbconnection.php';
}


$username = $_SESSION['username'];


    $sql = "SELECT * FROM utente WHERE username = $1";
    $result = pg_query_params($db,$sql,array($username));
    if($result) {
        $row = pg_fetch_assoc($result);

        echo '<div class="user-profile">
                    <p class="username">Username: <span>' . $row['username'] . '</span></p>
                    <p class="name">Nome: <span>'. $row['nome'] . '</span></p>
                    <p class="surname">Cognome: <span>'. $row['cognome'] .'</span></p>
                    <p class="birthdate">Data di nascita: <span>'. $row['data_di_nascita'] .'</span></p>
                    <p class="gender">Sesso: <span>'. $row['sesso'].'</span></p>
                    <p class="email">Email: <span>'. $row['email']. '</span></p>
                </div>';




    }