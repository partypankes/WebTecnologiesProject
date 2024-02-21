<?php

function top5(): void
{
    include 'core/dbconnection.php';

    if (isset($db)) {

        $sql = "SELECT * FROM ricetta WHERE voto IS NOT NULL ORDER BY voto DESC LIMIT 5 ;";
        $result = pg_query($db, $sql);
        $string = "";

        while ($row = pg_fetch_assoc($result)) {
            include 'core/card_ricette.php';
        }
        echo '<div class="container-card">' . $string . '</div>';
    }
}

function primi_piatti(): void
    {
        include 'core/dbconnection.php';

        if (isset($db)) {

            $sql = "SELECT * FROM ricetta WHERE portata = $1 AND voto IS NOT NULL ORDER BY voto DESC LIMIT 5 ;";
            $result = pg_query_params($db, $sql, array("primoPiatto"));
            $string = "";

            while ($row = pg_fetch_assoc($result)) {
                include 'core/card_ricette.php';
            }
            echo '<div class="container-card">' . $string . '</div>';
        }
    }

function secondi_piatti(): void
{
    include 'core/dbconnection.php';

    if (isset($db)) {

        $sql = "SELECT * FROM ricetta WHERE portata = $1 AND voto IS NOT NULL ORDER BY voto DESC LIMIT 5 ;";
        $result = pg_query_params($db, $sql, array("secondoPiatto"));
        $string = "";

        while ($row = pg_fetch_assoc($result)) {
            include 'core/card_ricette.php';
        }
        echo '<div class="container-card">' . $string . '</div>';
    }
}

function dessert(): void
{
    include 'core/dbconnection.php';

    if (isset($db)) {

        $sql = "SELECT * FROM ricetta WHERE portata = $1 AND voto IS NOT NULL ORDER BY voto DESC LIMIT 5 ;";
        $result = pg_query_params($db, $sql, array("dessert"));
        $string = "";

        while ($row = pg_fetch_assoc($result)) {
            include 'core/card_ricette.php';
        }
        echo '<div class="container-card">' . $string . '</div>';
    }
}

function veloci(): void
{
    include 'core/dbconnection.php';

    if (isset($db)) {

        $sql = "SELECT * FROM ricetta WHERE voto IS NOT NULL ORDER BY tempo_preparazione , voto DESC LIMIT 5 ;";
        $result = pg_query($db, $sql);
        $string = "";

        while ($row = pg_fetch_assoc($result)) {
            include 'core/card_ricette.php';
        }
        echo '<div class="container-card">' . $string . '</div>';
    }
}
