<?php

include '../dbconnection.php';

include '../auth.php';


$sql = 'SELECT * FROM ricetta WHERE utente = $1';

$parametri[] = $_SESSION['username'];

include '../xcard.php';

