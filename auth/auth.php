<?php

session_start();
$_SESSION['loggedin'] = true;
$_SESSION['username'] = "gilvestro_03";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    session_destroy();
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    /*
     * header("Location: ../login/login_page.php");
    */

}