<?php
require '../dbconnection.php';





$condizioni = [];
$parametri = [];
$i = 1;


if (!($_POST['email'] == 'undefined')) {
    $condizioni[] = " email = $" . $i++;
    $parametri[] = $_POST['email'];
}

if (!($_POST['password'] == 'undefined')) {
    $condizioni[] = " password = $" . $i++;
    $parametri[] = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

if (!($_POST['sesso'] == 'undefined')) {
    $condizioni[] = " sesso = $" . $i++;
    $parametri[] = $_POST['sesso'];
}

if (!($_POST['nome'] == 'undefined')) {
    $condizioni[] = " nome = $" . $i++;
    $parametri[] = $_POST['nome'];
}

if (!($_POST['cognome'] == 'undefined')) {
    $condizioni[] = " cognome = $" . $i++;
    $parametri[] = $_POST['cognome'];
}

if (!($_POST['data_di_nascita'] == 'undefined')) {
    $condizioni[] = " data_di_nascita = $" . $i++;
    $parametri[] = $_POST['data_di_nascita'];
}

if(!empty($condizioni)) {
    if(isset($db)) {
        $parametri[] = $_POST['username'];
        $sql = "UPDATE utente SET " . implode(",",$condizioni) . " WHERE username = $" . $i;
        $result = pg_query_params($db,$sql,$parametri);
    }

}


