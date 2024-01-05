<?php


session_start();


require_once '../dbconnection.php';
if(isset($db)) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sesso = $_POST['sesso'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    if(userValidation($db,$username,$email)) {
        echo "Username o Email giá esistente";
    }
    else {
        $sql = 'INSERT INTO utente (username, email, password, nome, cognome, sesso) VALUES ($1,$2,$3,$4,$5,$6)';
        $result = pg_query_params($db,$sql,array($username,$email,$password,$nome,$cognome,$sesso));
    }

}
else {
    echo "Db connection error";
}


function userValidation($db,$username,$email): bool
{

    $sql = 'SELECT COUNT(*) FROM utente WHERE username = $1 OR email = $2';
    $result = pg_query_params($db,$sql,array((string)$username, (string)$email));

    if ($result && pg_fetch_result($result, 0, 0) > 0) {
        return true;
    } else {
        return false;
    }

}
