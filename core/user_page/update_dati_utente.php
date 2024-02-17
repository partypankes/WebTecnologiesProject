<?php
require '../dbconnection.php';
require '../auth.php';



$condizioni = [];
$parametri = [];
$i = 1;


if (!($_POST['email'] == '')) {
    $condizioni[] = " email = $" . $i++;
    $parametri[] = $_POST['email'];
}

if (!($_POST['password'] == '')) {
    $condizioni[] = " password = $" . $i++;
    $parametri[] = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

if (isset($_POST['sesso'])) {
    $condizioni[] = " sesso = $" . $i++;
    $parametri[] = $_POST['sesso'];
}

if (!($_POST['nome'] == '')) {
    $condizioni[] = " nome = $" . $i++;
    $parametri[] = $_POST['nome'];
}

if (!($_POST['cognome'] == '')) {
    $condizioni[] = " cognome = $" . $i++;
    $parametri[] = $_POST['cognome'];
}

if (!($_POST['data_di_nascita'] == '')) {
    $condizioni[] = " data_di_nascita = $" . $i++;
    $parametri[] = $_POST['data_di_nascita'];
}

if(!empty($condizioni)) {
    if(isset($db)) {

        $parametri[] = $_SESSION['username'];
        $sql = "UPDATE utente SET " . implode(",",$condizioni) . " WHERE username = $" . $i;
        $result = pg_query_params($db,$sql,$parametri);

        include 'fetch_dati_utente.php';
    }


}


