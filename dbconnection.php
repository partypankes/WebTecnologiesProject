<?php

$host = "localhost";
$port = '5432';
$db = 'gruppo11';
$username = 'www';
$password = 'tw2024';
$connection_string = "host=$host port=$port dbname=$db user=$username password=$password";

$db = pg_connect($connection_string) or die('Impossibile connetersi al database');


