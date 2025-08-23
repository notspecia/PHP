<?php

include "./connessione.php";

// crea una nuova istanza della classe Connessione
$connessione = new Connessione();

// chiama il metodo getConn per stabilire la connessione e ottenerla
$conn = $connessione->getConn();
