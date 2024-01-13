<?php

session_start();
require_once '../dbconnection.php';

if(isset($db)) {
    $ricetta = $_POST['descrizioneRicetta'];
    $titolo = $_POST['titoloRicetta'];
    $tips = $_POST['tips'];
    $serving_suggestion = $_POST['servingSuggestion'];
    $preparation = $_POST['procedimentoRicetta'];
    $categoria = $_POST['categoriaRicetta'];

    $sql1 = "INSERT INTO ricetta (ricetta, titolo, tips, serving_suggestion, preparation, utente) VALUES ($1, $2, $3, $4, $5,'dudu');";

    pg_query_params($db,$sql1,array($ricetta,$titolo,$tips,$serving_suggestion,$preparation));

    $sql2 = "INSERT INTO relazione_categoria (ricetta, categoria)
VALUES ((SELECT id FROM ricetta WHERE titolo = $1 ), (SELECT categoria FROM categoria WHERE categoria = $2));";

    pg_query_params($db,$sql2,array($titolo,$categoria));


    $sql3 = "INSERT INTO ingrediente (ingrediente_name) VALUES ($1)
ON CONFLICT (ingrediente_name) DO NOTHING;";

    $sql4 = "INSERT INTO relazione (ricetta, ingrediente)
VALUES ((SELECT id FROM ricetta WHERE titolo = $1 ), (SELECT ingrediente_name FROM ingrediente WHERE ingrediente_name = $2));";
    foreach ($_POST['ingredienti'] as $value) {
        pg_query_params($db,$sql3,array($value));
        pg_query_params($db,$sql4,array($titolo,$value));
    }
}