<?php

include "parameters.php";

$persons_in_store = 0;

// GET /filiale/anzahl
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['PATH_INFO'] === '/filiale/anzahl') {
    echo json_encode(array('anzahl' => $persons_in_store));
}

// POST /filiale/erhoehen
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['PATH_INFO'] === '/filiale/erhoehen') {
    $persons_in_store++;
    echo json_encode(array('anzahl' => $persons_in_store));
}

// POST /filiale/verringern
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['PATH_INFO'] === '/filiale/verringern') {
    $persons_in_store--;
    echo json_encode(array('anzahl' => $persons_in_store));
}
?>