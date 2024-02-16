<?php

require_once 'dbconnection.php';

if(isset($db)) {

    $username = $_POST['username'];
    $sql = 'SELECT * FROM utente WHERE username = $1';

    $result = pg_query_params($db,$sql,array((string)$username));

    if ($row = pg_fetch_assoc($result)) {
        $hashed_password = $row['password'];
        if (password_verify($_POST['password'], $hashed_password)) {
            if(isset($_POST['rememberMe'])) {
                $cookieLifetime = 4 * 60 * 60;
                session_set_cookie_params($cookieLifetime);
            }
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;


        } else {
            echo "Ha inserito la password sbagliata";
        }
    } else {
        echo "Username non trovato";
    }
}
else {
    echo "Db connection error";
}



