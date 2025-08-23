<?php

// faccio partire la sessione
session_start();

// primo formato deve essere una stringa, come secondo qualsiasi valore -> è una COSTANTE
define("TITOLO_SITO", "Minerali");

// ARRAY ASSOCIATIVO
$menu = [
    ["etichetta" => "Home", "collegamento" => "?"], // posizione 0
    ["etichetta" => "Solfuri", "collegamento" => "?page=solfuri"], // posizione 1
    ["etichetta" => "Nitrati", "collegamento" => "?page=nitrati"], // posizione 2
    ["etichetta" => "Tungstati", "collegamento" => "?page=tungstati"] // posizione 3
];

?>