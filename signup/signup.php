<?php


session_start();





require_once '../dbconnection.php';
if(isset($db)) {
    $username = $_POST['username'];
    echo $username;
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sesso = $_POST['sesso'];
    $nome = $_POST['name'];
    $cognome = $_POST['surname'];
    $sql = 'INSERT INTO users (username, email, password, sesso, nome, cognome) VALUES ($1,$2,$3,$4,$5,$6)';

    $result = pg_query_params($db,$sql,array($username,$email,$password,$sesso,$nome,$cognome));

}
else {
    echo "Db connection error";
}


