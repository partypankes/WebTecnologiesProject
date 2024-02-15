<?php
require_once  '../dbconnection.php';
$section = $_GET['section'] ?? '';
$id = $_GET['id'];


if(isset($db)) {
    switch ($section) {
        case 'ingredienti':
            $query = "SELECT i.nome, ri.quantita, ri.misurazione FROM ingrediente i INNER JOIN relazione_ingrediente ri ON i.nome = ri.ingrediente WHERE ri.ricetta = $1";
            $result = pg_query_params($db, $query,array($id));
            if ($result) {
                $tableHTML = "<table  id='ingredienti'><tr><th>Ingrediente</th><th>Quantità</th><th>Misurazione</th></tr>";
                $i = 1;
                while ($row = pg_fetch_assoc($result)) {
                    $tableHTML .= "<tr><td>".$row['nome']."</td><td>".$row['quantita']."</td><td>".$row['misurazione']."</td></tr>";
                }
                $tableHTML .= "</table>";
                pg_close($db);
                echo $tableHTML;
            } else {
                echo "Errore nella query.";
            }

            break;
        case 'preparazione':
            $query = 'SELECT procedimento FROM ricetta WHERE id = $1';
            $result = pg_query_params($db, $query,array($id));
            if($row = pg_fetch_assoc($result)) {
                $str = null;
                $jsonData = json_decode($row['procedimento'], true);
                foreach ($jsonData as $elemento) {
                    echo "<div class='preparazione'>
                            <p>" . $elemento['id'] . ") " . $elemento['text'] . "</p>
                        </div>";
                }
            } else {
                echo "errore nella query";
            }
            pg_close($db);
            break;

        case 'tips' :
            $query = 'SELECT tips FROM ricetta WHERE id = $1';
            $result = pg_query_params($db,$query,array($id));

            if($row = pg_fetch_assoc($result)) {
                $str = null;
                $jsonData = json_decode($row['tips'], true);
                foreach ($jsonData as $elemento) {
                    echo "<div class='consigli'>
                            <p>" . $elemento['text'] . "</p>
                        </div>";
                }
            } else {
                echo "Errore nella query";
            }
            pg_close($db);
            break;

    }
}



