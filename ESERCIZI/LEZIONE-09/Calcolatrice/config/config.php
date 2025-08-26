<?php

// start per far partire la sessione
session_start();

define('TITOLO_SITO', 'Calcolatrice');

// array associativo
$menu = [
    ['etichetta' => 'Home', 'collegamento' => '?'], //0
    ['etichetta' => 'Solfuri', 'collegamento' => '?page=solfuri'], //1
    ['etichetta' => 'Ossidi', 'collegamento' => '?page=ossidi'], //2
    ['etichetta' => 'Nitrati', 'collegamento' => '?page=nitrati'],
    ['etichetta' => 'Tungstati', 'collegamento' => '?page=Tungstati'],
];
