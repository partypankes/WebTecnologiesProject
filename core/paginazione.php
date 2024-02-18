<?php

if(isset ($db) && isset($sql_paginazione) && isset($parametri) && isset($sql) && isset($func)) {
    $np = $_POST['np'];
    $rpp = 12;


    $resultTotal = pg_query_params($db, $sql_paginazione, $parametri);
    $rowTotal = pg_fetch_assoc($resultTotal);
    $total_rows = $rowTotal['total'];
    $last = ceil($total_rows / $rpp);
    if ($last < 1) {
        $last = 1;
    }

    if ($np < 1) {
        $np = 1;
    } else if ($np > $last) {
        $np = $last;
    }

    $controls = "";

    if ($last != 1) {
        if ($np > 1) {
            $controls .= '<button onclick="'.$func.'(' . ($np - 1) . ')">&lt;</button>';
        }
        $controls .= '<b> Page ' . $np . ' of ' . $last . '</b>';
        if ($np != $last) {
            $controls .= '<button onclick="'.$func .'(' . ($np + 1) . ')">&gt;</button>';
        }
    }


    $sql .= ' LIMIT ' . $rpp . ' OFFSET ' . ($np - 1) * $rpp;
}