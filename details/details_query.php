<?php
require_once  '../dbconnection.php';
$section = $_GET['section'] ?? '';
if(isset($db)) {
    switch ($section) {
        case 'ingredienti':
            $query = "SELECT i.ingrediente_name, ri.quantita, ri.misurazione FROM ingrediente i INNER JOIN ricetta_ingrediente ri ON i.id = ri.ingrediente WHERE ri.ricetta = 4";
            $result = pg_query($db, $query);
            if ($result) {
                $tableHTML = "<table  id='ingredienti'><tr><th>Ingrediente</th><th>Quantità</th></tr>";
                $i = 1;
                while ($row = pg_fetch_assoc($result)) {
                    $tableHTML .= "<tr><td>".$row['ingrediente_name']."</td><td>".$row['quantita']."</td></tr>";
                }
                $tableHTML .= "</table>";
                pg_close($db);
                echo $tableHTML;
            } else {
                echo "Errore nella query.";
            }

            break;
        case 'preparazione':
            $query = 'SELECT preparation_json FROM ricetta WHERE id = 4';
            $result = pg_query($db, $query);
            if($row = pg_fetch_assoc($result)) {
                $str = null;
                $jsonData = json_decode($row['preparation_json'], true);
                foreach ($jsonData as $elemento) {
                    echo "<p>" . $elemento['id'] . ") " . $elemento['text'] . "</p>";
                }
                echo $str;
            } else {
                echo "errore nella query";
            }
            pg_close($db);
            break;

        case 'serving':
            $query = 'SELECT serving_suggestion FROM ricetta WHERE id = 4';
            $result = pg_query($db,$query);
            if($row = pg_fetch_assoc($result)) {
                echo "<p>" . $row['serving_suggestion'] . "</p>";
            } else {
                echo "errore nella query";
            }
            pg_close($db);
            break;

        case 'tips' :
            $query = 'SELECT tips FROM ricetta WHERE id = 4';
            $result = pg_query($db,$query);
            if($row = pg_fetch_assoc($result)) {
                echo "<p>" . $row['tips'] . "</p>";
            } else {
                echo "Errore nella query";
            }
            pg_close($db);
            break;
        // Altri casi
    }
}


// Supponiamo che $output sia il risultato HTML da inviare indietro
