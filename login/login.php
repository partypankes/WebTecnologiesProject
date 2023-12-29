<?php


session_start();
$username = $_POST['username'];
$provided_password = $_POST['password'];
require_once 'dbconnection.php';
$sql = "SELECT password FROM users WHERE username = $1";
if(isset($db)) {
    $result = pg_query_params($db, $sql, $username);
}
else {
    echo "Db connection error";
}

if ($row = pg_fetch_assoc($result)) {
    $hashed_password = $row['password'];
} else {
    echo "Username non trovato";
}

if (password_verify($provided_password, $hashed_password)) {
    // Successo, le password corrispondono
} else {
    // Fallimento, le password non corrispondono
}