<?php

include "parameters.php";

$persons_in_store = 0;

// GET /counter/counterId
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_METHOD'] === '/counter/counterId') {
    echo json_encode(array('counterId' => $persons_in_store));
}

// POST /counter/increment
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_METHOD'] === '/counter/increment') {
    $persons_in_store++;
    echo json_encode(array('counterId' => $persons_in_store));
}

// POST /counter/decrement
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_METHOD'] === '/counter/decrement') {
    $persons_in_store--;
    echo json_encode(array('counterId' => $persons_in_store));
}
?>