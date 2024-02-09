<?php

require_once '../dbconnection.php';

if(isset($db)) {
    $ricetta = $_POST['descrizioneRicetta'];
    $titolo = $_POST['titoloRicetta'];
    $tips = $_POST['tips'];
    $serving_suggestion = $_POST['servingSuggestion'];
    $categoria = $_POST['categoriaRicetta'];
    $quantita = $_POST['quantita'];
    $unita = $_POST['unita'];
    $preparation = array();
    $count = 1;
    foreach($_POST['procedimentiRicetta'] as $fase) {
        $procedimento = array("id" => $count, "text" => $fase);
        $preparation[] = $procedimento;
    }

    $file = $_FILES['immagineRicetta']['tmp_name'][0];
    $data = pg_escape_bytea(file_get_contents($file));
    $sql1 = "INSERT INTO ricetta (ricetta, titolo, tips, serving_suggestion, preparation_json, utente,copertina) VALUES ($1, $2, $3, $4, $5, 'KunkiDurty', $6) RETURNING id;";

    $result = pg_query_params($db,$sql1,array($ricetta,$titolo,$tips,$serving_suggestion,json_encode($preparation),$data));

    if ($result) {
        $id = pg_fetch_result($result, 0, 'id');
        echo "ID della nuova ricetta: " . $id;
    } else {
        echo "Errore nell'inserimento della ricetta";
        return;
    }
    $sql2 = "INSERT INTO relazione_categoria (ricetta, categoria) VALUES ($1 , (SELECT categoria FROM categoria WHERE categoria = $2));";

    pg_query_params($db,$sql2,array($id,$categoria));


    $sql3 = "INSERT INTO ingrediente (ingrediente_name) VALUES ($1);";
    //$sql3 = "INSERT INTO ingrediente (ingrediente_name) VALUES ($1) ON CONFLICT (ingrediente_name) DO NOTHING;";

    $sql4 = "INSERT INTO ricetta_ingrediente (ricetta, ingrediente,quantita,misurazione) VALUES ($1, (SELECT id FROM ingrediente WHERE ingrediente_name = $2),$3,$4);";
    $iter = 0;
    foreach ($_POST['ingredienti'] as $value) {
        pg_query_params($db,$sql3,array($value));
        pg_query_params($db,$sql4,array($id,$value,$quantita[$iter],$unita[$iter]));
        $iter++;
    }

    $sql5 = "INSERT INTO immagini (ricetta,immagine) VALUES ($1,$2) ;";
    foreach ($_FILES['immagineRicetta']['tmp_name'] as $key => $tmp_name) {
        $data = file_get_contents($_FILES['immagineRicetta']['tmp_name'][$key]);
        pg_query_params($db,$sql5,array($id,pg_escape_bytea($data)));
    }
}