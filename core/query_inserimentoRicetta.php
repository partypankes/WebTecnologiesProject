<?php
include 'auth.php';
require_once 'dbconnection.php';

if(isset($db)) {
    $descrizione = $_POST['descrizioneRicetta'];
    $titolo = $_POST['titoloRicetta'];
    $tips = $_POST['tips'];
    $portata = $_POST['categoriaRicetta'];
    $quantita = $_POST['quantita'];
    $unita = $_POST['unita'];
    $username = $_SESSION['username'];
    $tempo_preparazione = $_POST['tempo_preparazione'];

    $preparation = array();
    $count = 1;
    foreach($_POST['procedimentiRicetta'] as $fase) {
        $procedimento = array("id" => $count, "text" => htmlspecialchars($fase));
        $preparation[] = $procedimento;
        $count++;
    }

    $total_tips = array();
    foreach($_POST['tips'] as $temp) {
        $tips = array("text" =>  htmlspecialchars($temp));
        $total_tips[] = $tips;
    }

    $file = $_FILES['images']['tmp_name'][0];
    $data = pg_escape_bytea(file_get_contents($file));
    $sql1 = "INSERT INTO ricetta (descrizione, titolo, tips ,procedimento, utente,banner,portata,tempo_preparazione) VALUES ($1, $2, $3, $4, $5,$6,$7,$8) RETURNING id;";

    $result = pg_query_params($db,$sql1,array(htmlspecialchars($descrizione),htmlspecialchars($titolo),json_encode($total_tips),json_encode($preparation),$username,$data,$portata,$tempo_preparazione));

    if ($result) {
        $id = pg_fetch_result($result, 0, 'id');
        echo $id;
    } else {
        echo "Errore nell'inserimento della ricetta";
        return;
    }

    $sql3 = "INSERT INTO ingrediente (nome) VALUES ($1) ON CONFLICT DO NOTHING;";

    $sql4 = "INSERT INTO relazione_ingrediente (ricetta, ingrediente,quantita,misurazione) VALUES ($1, (SELECT nome FROM ingrediente WHERE nome = $2),$3,$4);";
    $iter = 0;
    foreach ($_POST['ingredienti'] as $value) {
        $value_sanificated =  htmlspecialchars($value);
        pg_query_params($db,$sql3,array($value_sanificated));
        pg_query_params($db,$sql4,array($id,$value_sanificated,$quantita[$iter],$unita[$iter]));
        $iter++;
    }

}