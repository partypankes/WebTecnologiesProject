
<?php
include '../auth/auth.php';
require_once '../dbconnection.php';

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
        $procedimento = array("id" => $count, "text" => $fase);
        $preparation[] = $procedimento;
        $count++;
    }

    $total_tips = array();
    foreach($_POST['tips'] as $temp) {
        $tips = array("text" => $temp);
        $total_tips[] = $tips;
    }

    $file = $_FILES['images']['tmp_name'][0];
    $data = pg_escape_bytea(file_get_contents($file));
    $sql1 = "INSERT INTO ricetta (descrizione, titolo, tips ,procedimento, utente,banner,portata,tempo_preparazione) VALUES ($1, $2, $3, $4, $5,$6,$7,$8) RETURNING id;";

    $result = pg_query_params($db,$sql1,array($descrizione,$titolo,json_encode($total_tips),json_encode($preparation),$username,$data,$portata,$tempo_preparazione));

    if ($result) {
        $id = pg_fetch_result($result, 0, 'id');
        echo "ID della nuova ricetta: " . $id;
    } else {
        echo "Errore nell'inserimento della ricetta";
        return;
    }


    $sql3 = "INSERT INTO ingrediente (nome) VALUES ($1) ON CONFLICT DO NOTHING;";
    //$sql3 = "INSERT INTO ingrediente (ingrediente_name) VALUES ($1) ON CONFLICT (ingrediente_name) DO NOTHING;";

    $sql4 = "INSERT INTO relazione_ingrediente (ricetta, ingrediente,quantita,misurazione) VALUES ($1, (SELECT nome FROM ingrediente WHERE nome = $2),$3,$4);";
    $iter = 0;
    foreach ($_POST['ingredienti'] as $value) {
        pg_query_params($db,$sql3,array($value));
        pg_query_params($db,$sql4,array($id,$value,$quantita[$iter],$unita[$iter]));
        $iter++;
    }

    /*$sql5 = "INSERT INTO immagini (ricetta,immagine) VALUES ($1,$2) ;";
    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $data = file_get_contents($_FILES['images']['tmp_name'][$key]);
        pg_query_params($db,$sql5,array($id,pg_escape_bytea($data)));
    }*/
}