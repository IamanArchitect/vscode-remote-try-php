<?php

include "parameters.php";

// Setzt die Startanzahl auf 0.
$count_persons = 0;

// Wenn der Benutzer eine "increment" Anfrage sendet, erhöht er die Anzahl um 1.
if(isset($_GET['action']) && $_GET['action'] == 'increment') {
    $count_persons++;
}

// Wenn der Benutzer eine "decrement" Anfrage sendet, verringert er die Anzahl um 1, aber nur wenn die Anzahl größer als 0 ist.
if(isset($_GET['action']) && $_GET['action'] == 'decrement' && $count_persons > 0) {
    $count_persons--;
}

// Wenn der Benutzer eine "get" Anfrage sendet, gibt er die aktuelle Anzahl zurück.
if(isset($_GET['action']) && $_GET['action'] == 'get') {
  echo $count_persons;
  exit;
}
?>