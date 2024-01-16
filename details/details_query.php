<?php
require_once  '../dbconnection.php';
$section = $_GET['section'] ?? '';
if(isset($db)) {
    switch ($section) {
        case 'ingredienti':
            $query = "SELECT i.ingrediente_name, ri.quantita, ri.misurazione FROM ingrediente i INNER JOIN ricetta_ingrediente ri ON i.id = ri.ingrediente WHERE ri.ricetta = 1";
            $result = pg_query($db, $query);
            if ($result) {
                $tableHTML = "<table border='1' id='tabella-ingredienti'><tr><th>Quantitá</th><th>Misurazione</th><th>Nome Ingrediente</th></tr>";
                $i = 1;
                while ($row = pg_fetch_assoc($result)) {
                    $tableHTML .= "<tr><td>".$row['quantita']."</td><td>".$row['misurazione']."</td><td>".$row['ingrediente_name']."</td></tr>";
                }
                $tableHTML .= "</table>";
                pg_close($db);
                echo $tableHTML;
            } else {
                echo "Errore nella query.";
            }

            break;
        case 'preparazione':
            // Query per la preparazione
            break;

        case 'serving':
            $query = 'SELECT serving_suggestion FROM ricetta WHERE id = 1';
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
